<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Documento;

class ArticulosController extends Controller{

    public function index(){

        $docs = Documento::all();
        return view('administradores/articulos/index', compact('docs'));
    }

    public function create(Request $request){

        $archivo = $request->file('file');
        $nombre = $archivo->getClientOriginalName();
        $insertar = new Documento;
        $insertar->nombre_archivo=$nombre;
        $insertar->save();
        $ruta = public_path() . '/Archivos/';
        $archivo->move($ruta, $nombre);
        return back()->with('status', 'Archivo agregado');
    }

    public function read($nombre){
        $ruta= asset('Archivos/' . $nombre);
        return view('administradores/articulos/read', compact('ruta'));
    }

    public function delete($nombre){
        $ruta = public_path() . '/Archivos/';
        $borra = $ruta . $nombre;
        if(file_exists($borra)){
            // Elimina la imagen antigua
            unlink($borra);
        }
        $borrar=new Documento();
        $borrar=Documento::where('nombre_archivo','=',$nombre);
        $borrar->delete();

        return back()->with('status', 'Archivo eliminado');
    }
}
