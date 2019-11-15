<?php
	
	/*CALENDARIO*/

	Route::get('/Administrador/Calendario',
		'Administrador\CalendarioController@index')
		->name('calendario.index')
		->middleware('permission:admi.calendario');

	Route::post('/Administrador/Calendario',
		'Administrador\CalendarioController@update')
		->name('calendario.update')
		->middleware('permission:admi.calendario');