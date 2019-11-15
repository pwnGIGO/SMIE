<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Imagen;

class SlideController extends Controller
{
    public function index(){

      $imagenes_carrusel = Imagen::where('tipo', '=','carrusel') -> get();
      $numero_imagenes_c = count($imagenes_carrusel);
      $primera_imagen = Imagen::where('tipo', '=','carrusel') -> first();
      return view('administradores/slide/index',compact('imagenes_carrusel','numero_imagenes_c','primera_imagen'));
    }

    public function create(){

        return view('administradores/slide/create');
    }

    public function store(Request $request){

        //aqui se crea una nueva imagen para el carrusel
        $file = $request->file('file');
        $nombre = $file->getClientOriginalName();
        $file->move(public_path().'/Imagenes/carrusel',$nombre); //la imagen obtenida, se mueve a la carpeta publica en la ruta indicada

        $insertar = new Imagen;
        $insertar->id_album = 0;
        $insertar->nombre_imagen=$nombre;
        $insertar->tipo="carrusel";
        $insertar->save();

        return redirect()->route('slide.index')->with('status', 'La imagen ha sido creada');

    }

    public function show($id){

        //
    }

    public function edit($id){

        $imagen_carrusel = Imagen::where('id_imagen', '=',$id) -> first();
        return view('administradores/slide/edit',compact('imagen_carrusel'));
    }

    public function update(Request $request, $id_antigua ,$nombre_antigua){

      //borramos del servidor la imagen antigua
      $ruta_antigua=public_path('Imagenes/carrusel/'.$nombre_antigua);
      if(file_exists($ruta_antigua)){
          // Elimina la imagen antigua
          \File::delete($ruta_antigua);
      }

      //ponemos la nueva en el servidor
      $file = $request->file('file');
      $nuevo_nombre = $file->getClientOriginalName();
      $file->move(public_path().'/Imagenes/carrusel',$nuevo_nombre);

      //modificamos en BD
      $ima_nueva = Imagen::where('id_imagen', '=', $id_antigua)->update(['nombre_imagen' => $nuevo_nombre]);

        return redirect()->route('slide.index')->with('status', 'Imagen actualizada con exito');

    }

    public function destroy($id_ima){

      $query = Imagen::where('id_imagen','=',$id_ima)->first();   //borramos del servidor
      $ruta=public_path('Imagenes/carrusel/'.$query->nombre_imagen);
      if(file_exists($ruta)){
          // Elimina la imagen antigua
          \File::delete($ruta);
      }
      //borramos de la bd
      $borrar=Imagen::where('id_imagen','=',$id_ima);
      $borrar->delete();

      return back()->with('status', 'La imagen ha sido borrada del carrusel');

      //return back();
    }
}