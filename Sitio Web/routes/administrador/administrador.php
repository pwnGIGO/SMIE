<?php

/*Inicio de Administrador*/
	Route::get('/Administrador', 'AdministradorController@home')
		->name('admi.home')
		->middleware('permission:admi.admi');

	include("partial/slide.php");
	include("partial/cronograma.php");
	include("partial/galeria.php");
	include("partial/calendario.php");
	include("partial/articulos.php");
	include("partial/roles.php");
	include("partial/users.php");

/*Configuracion de la cuenta*/
	Route::get('user/config','AdministradorController@miCuenta' )
		->name('configuration');

	Route::post('user/config/pass', 'AdministradorController@updatePass')
		->name('newPass');