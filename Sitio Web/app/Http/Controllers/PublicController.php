<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Album;
use Mail;
use App\Mail\EmergencyCallReceived;
/*
    Clase que maneja las vistas publicas
*/

class PublicController extends Controller
{
    // Inicio
    public function inicio(){
    	$imagenes_carrusel = Imagen::where('tipo', '=','carrusel') -> get();
     	$numero_imagenes_c = count($imagenes_carrusel);
      	$primera_imagen = Imagen::where('tipo', '=','carrusel') -> first();
      	
     	return view('publico.inicio',compact('imagenes_carrusel','numero_imagenes_c','primera_imagen'));
	}

	// ¿Que es el capitulo estudiantil?
	public function capitulo(){
    	return view('publico/capitulo_estudiantil');
	}

	// Mision y Vision
	public function mision(){
    	return view('publico/mision_vision');
	}

	// Actividades y Eventos
	public function actividades(){

		$imagen = Imagen::where('tipo', '=', 'cronograma')->first();
        if($imagen!=null){
            $nombre = $imagen->nombre_imagen;
            return view('publico/actividades', compact('nombre'));
        }else{
            $nombre="";
            return view('publico/actividades', compact('nombre'));
        }
	}

	// Galeria
	public function galeria(){
		$posts = Album::get();
        return view('publico/galeria',compact('posts'));
	}

	// Galeria del album
	public function galeria_album($id){

		// Todas las imagenes del album
        $imagenes = Imagen::where('id_album', '=',$id) -> get();
        // Album para mostrar nombre de album en la vista
        $album = Album:: where('id_album', '=', $id) -> first();

        return view('publico/galeria_album',compact('imagenes','album'));
	}

	// Comunidad Estudiantil
	public function comunidad(){
		return view('publico/comunidad_estudiantil');
	}

	// Contanto y Miembros
	public function contactos(){
		return view('publico/contacto_miembros');
	}

	//Login de Miembros

	public function formularioLogin(){
   		//return view('auth.loginMiembro');
   		return 'Formar parte de la Brigada';
   }

	// Calendario
	public function calendario(){
		$imagen = Imagen::where('tipo', '=', 'calendario')->first();
        if($imagen!=null){
            $nombre = $imagen->nombre_imagen;
            return view('publico/calendario', compact('nombre'));
        }else{
            $nombre="";
            return view('publico/calendario', compact('nombre'));
        }
	}

	// Informacion
	public function informacion(){
		return view('publico/informacion');
	}

	// Relaciones
	public function relaciones(){
		return view('publico/relaciones');
	}

	// Historia
	public function historia(){
		return view('publico/historia');
	}

	// Asesorias
	public function asesorias(){
		return view('publico/asesorias');
	}

	public function mailAsesoria(Request $request){
		//dd($request);
		$correo=$request->email;
		$matricula=$request->matricula;
		$whatsaap=$request->whatsaap;
		$comentario=$request->comentario;
		
		$mensaje="Correo: ".$correo."\nMatricula: ".$matricula."\nWhatsApp: ".$whatsaap."\nComentario: ".$comentario;

		//return $concat;

    
		if(mail('smie.uam@gmail.com', 'Asesoria sitio SMIE', $mensaje)) 
			return redirect()->route('usuarios.inicio')->with('status', 'Mensaje enviado');
		else
			return redirect()->route('usuarios.inicio')->with('status', 'Error al enviar mensaje');
	}	

	// ¿Quieres formar parte de la Brigada?
	public function formarBrigada(Request $request){
		return view('publico/brigada');
	}

	public function mailBrigada(Request $request){
		$correo=$request->email;
		$matricula=$request->matricula;
		$whatsaap=$request->whatsaap;
		$comentario=$request->comentario;
		
		$mensaje="Correo: ".$correo."\nMatricula: ".$matricula."\nWhatsApp: ".$whatsaap."\nComentario: ".$comentario;

		//return $concat;

    
		if(mail('smie.uam@gmail.com', 'Asesoria sitio SMIE', $mensaje)) 
			return redirect()->route('usuarios.inicio')->with('status', 'Solicitud enviada');
		else
			return redirect()->route('usuarios.inicio')->with('status', 'Error al enviar solicitud');
	}
}
