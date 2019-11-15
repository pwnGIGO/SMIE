<?php

	Auth::routes();
	
	include("publico.php");
	//Filtro para verficiar inicio de sesion

	Route::get('sendemail', function(){
		$data = array(
			'name' => "Curso laravel",
			);
		Mail::send('publico.inicio', $data, function($message){
			$message->from('smie.uam@gmail.com', 'Curso laravel');
			$message->to('smie.uam@gmail.com')->subject('Test email curso laravel');
		});
		return 'Mensaje enviado';
	});

	Route::middleware(['auth'])->group(function(){

		include("administrador/administrador.php");
		include("miembros.php");

	});