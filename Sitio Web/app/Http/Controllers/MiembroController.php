<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Documento;
/*
    Clase que maneja las vistas del Miembro
*/

class MiembroController extends Controller
{
    public function index(){
   		$docs = Documento::all();
   		return view('miembros/index', compact('docs'));
   }

   public function read($nombre){
   		$ruta= asset('Archivos/' . $nombre);
        return view('miembros/read', compact('ruta'));
   }
}
