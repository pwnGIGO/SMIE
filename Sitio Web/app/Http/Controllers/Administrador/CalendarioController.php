<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagen;
use Validator;

class CalendarioController extends Controller{

    public function index(){

        $imagen = Imagen::where('tipo', '=', 'calendario')->first();
        if($imagen!=null){
            $nombre = $imagen->nombre_imagen;
            return view('administradores/calendario/index', compact('nombre'));
        }else{
            $nombre="";
            return view('administradores/calendario/index', compact('nombre'));
        }
    }

    // Sube una Imagen al servidor
    public function update(Request $request){

        $nombre = $request->file->getClientOriginalName();
        $ruta = public_path() . '/Imagenes/Calendario/';

        $calendario = Imagen::where("tipo", "=", "calendario")->first();
        if ($calendario == null) {
            // Se sube por primera vez
            $request->file->move($ruta, $nombre);
            $imagen = new Imagen;
            $imagen->id_album = "0";
            $imagen->nombre_imagen = $nombre;
            $imagen->tipo = "calendario";
            $imagen->save();
            return back()->with('status', 'Calendario actualizado');
        }else{
            // Se actualiza 
            $borra = $ruta . $calendario->nombre_imagen;

            if(file_exists($borra)){
                // Elimina la imagen antigua
                unlink($borra);
            }

            $request->file->move($ruta, $nombre);

            Imagen::where('tipo', '=', 'calendario')->update(['nombre_imagen' => $nombre]);
            return back()->with('status', 'Calendario actualizado');
        }
    }
}