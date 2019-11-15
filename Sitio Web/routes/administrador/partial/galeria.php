<?php

	/*GALERIA*/

	// Index Galeria
	Route::get('/Administrador/Galeria/Albumes',
		'Administrador\GaleriaController@index')
		->name('galeria.index')
		->middleware('permission:admi.galeria');

	// Create Galeria
	Route::get('/Administrador/Galeria/Crear',
		'Administrador\GaleriaController@create')
		->name('galeria.crear')
		->middleware('permission:admi.galeria');

	// Read Galeria
	Route::get('/Administrador/Galeria/Albumes/{id}',
		'Administrador\GaleriaController@readAlbum')
		->name('galeria.mostrar')
		->middleware('permission:admi.galeria');
	
	// Update album Galeria
	Route::post('/Administrador/Galeria/guardar',
		'Administrador\GaleriaController@updateAlbum')
		->name('galeria.creacion_album')
		->middleware('permission:admi.galeria');
	
	// Delete album Galeria
	Route::get('/Administrador/Borrar/{id}',
		'Administrador\GaleriaController@deleteAlbum')
		->name('galeria.borrar_album')
		->middleware('permission:admi.galeria');

	// Create imagen Galeria
	Route::post('/Administrador/Galeria/Albumes/{id}',
		'Administrador\GaleriaController@createImagen')
		->name('galeria.guardar')
		->middleware('permission:admi.galeria');

	// Delete imagen Galeria
	Route::get('/Administrador/Galeria/Borrar/{id}',
		'Administrador\GaleriaController@deleteImagen')
		->name('galeria.borrar')
		->middleware('permission:admi.galeria');