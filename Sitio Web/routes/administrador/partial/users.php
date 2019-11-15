<?php

	/*USUARIOS*/

	Route::get('Usuarios',
		'Administrador\UserController@index')
		->name('users.index')
		->middleware('permission:users.index');

	Route::put('Usuarios/{user}',
		'Administrador\UserController@update')
		->name('users.update')
		->middleware('permission:users.edit');

	Route::get('Usuarios/{user}',
		'Administrador\UserController@show')
		->name('users.show')
		->middleware('permission:users.show');

	Route::delete('Usuarios/{user}',
		'Administrador\UserController@destroy')
		->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('Usuarios/{user}/edit',
		'Administrador\UserController@edit')
		->name('users.edit')
		->middleware('permission:users.edit');