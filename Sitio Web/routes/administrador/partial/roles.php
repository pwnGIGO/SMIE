<?php

	/*ROLES*/
	Route::get('roles',
		'Administrador\RoleController@index')
		->name('roles.index')
		->middleware('permission:roles.index');

	Route::post('roles/store',
		'Administrador\RoleController@store')
		->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles/create',
		'Administrador\RoleController@create')
		->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}',
		'Administrador\RoleController@update')
		->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}',
		'Administrador\RoleController@show')
		->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}',
		'Administrador\RoleController@destroy')
		->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/edit/{role}',
		'Administrador\RoleController@edit')
		->name('roles.edit')
		->middleware('permission:role.edit');