<?php

	/*ARTICULOS*/

	//Index Articulo
	Route::get('/Administrador/Articulos',
		'Administrador\ArticulosController@index')
		->middleware('permission:admi.articulos')
		->name('articulo.index');

	// Create Articulo
	Route::post('/Administrador/Articulos',
		'Administrador\ArticulosController@create')
		->middleware('permission:admi.articulos')
		->name('articulo.create');

	// Read Articulo
	Route::get('/Administrador/Articulos/{id_articulo}',
		'Administrador\ArticulosController@read')
		->middleware('permission:admi.articulos')
		->name('articulo.read');

	Route::post('/Administrador/Articulos/{id_articulo}',
		'Administrador\ArticulosController@delete')
		->middleware('permission:admi.articulos')
		->name('articulo.delete');