<?php

	/*CRONOGRAMA*/
	
	Route::get('/Administrador/Cronograma',
		'Administrador\CronogramaController@index')
		->name('cronograma.index')
		->middleware('permission:admi.cronograma');

	Route::post('/Administrador/Cronograma',
		'Administrador\CronogramaController@update')
		->name('cronograma.update')
		->middleware('permission:admi.cronograma');