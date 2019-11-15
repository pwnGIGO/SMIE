<?php

	Route::get('/Articulos_y_Documentos',
		'MiembroController@index')
		->name('miembros.articulos');

	Route::get('/Articulos_y_Documentos/{id_articulo}',
		'MiembroController@read')
		->name('miembros.read');