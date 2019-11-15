<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Imagen;
use App\Models\Album;

class GaleriaController extends Controller{

    /* CRUD Album */

    public function index(){

        $posts = Album::get(); 
        return view('administradores/albumes/index',compact('posts'));
    }

    public function create(){
        
        return view('administradores/albumes/create');       
    }

    public function readAlbum($id){

        // Todas las imagenes del album
        $imagenes = Imagen::where('id_album', '=',$id) -> get();
        // Album para mostrar nombre de album en la vista
        $album = Album::where('id_album', '=', $id) -> first();
        return view('administradores/albumes/read',compact('imagenes','album','id'));
    }

    public function updateAlbum(Request $request){

        $nombre = $request->input('nombre_a');
        $descripcion = $request->input('descripcion');
        $nuevo_album=new Album;
        $nuevo_album->nombre_album = $nombre;
        $nuevo_album->descripcion = $descripcion;
        $nuevo_album->save();
        return redirect()->route('galeria.index');
    }

    public function deleteAlbum($id){

        //borrar todas las imagenes del album
        $imagenes = Imagen::where('id_album','=',$id)->get();

        // Para cada elemento  de la lista se elimina
        foreach ($imagenes as $imagen) {         
            self::deleteImagen($imagen->id_imagen);
        }

        $borrar=Album::where('id_album','=',$id);
        $borrar->delete();
        return redirect()->route('galeria.index');
    }

    /* CRUD Imagen*/

    public function createImagen(Request $request,$id_a){

        $file = $request->file('file');
        $nombre = $file->getClientOriginalName();
        $file->move(public_path().'/Imagenes/albums',$nombre); //la imagen obtenida, se mueve a la carpeta publica en la ruta indicada
        $insertar = new Imagen;
        $insertar->id_album=$id_a;
        $insertar->nombre_imagen=$nombre;
        $insertar->tipo="galeria";
        $insertar->save();
    }
    
    public function deleteImagen($id){

        $query = Imagen::where('id_imagen','=',$id)->first();   //borramos del servidor
        $ruta=public_path('Imagenes/albums/'.$query->nombre_imagen);
        \File::delete($ruta);                           //borramos de la bd
        $borrar=Imagen::where('id_imagen','=',$id);
        $borrar->delete();
        return back();
    }
}