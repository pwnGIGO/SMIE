<?php

	/*SLIDE*/

	// Index Slide
	Route::get('/Administrador/slide',
		'Administrador\SlideController@index')
		->name('slide.index')
		->middleware('permission:admi.slide');

	// Delete Slide
	Route::get('/Administrador/slide/Borrar/{id}',
		'Administrador\SlideController@destroy')
		->name('slide.borrar')
		->middleware('permission:admi.slide');

	//Store Slide
	Route::post('/Administrador/slide',
		'Administrador\SlideController@store')
		->name('slide.store')
		->middleware('permission:admi.slide');