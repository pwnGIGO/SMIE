<?php
	
	// Menu superior

	Route::get('/',
		'PublicController@inicio')
		->name('usuarios.inicio');

	Route::get('/Inicio',
		'PublicController@inicio')
		->name('usuarios.inicio');

	Route::get('/Capitulo_Estudiantil',
		'PublicController@capitulo')
		->name('usuarios.capitulo');

	Route::get('/Mision_Vision',
		'PublicController@mision')
		->name('usuarios.mision');
	
	Route::get('/Actividades_y_Eventos',
		'PublicController@actividades')
		->name('usuarios.actividades');
	
	Route::get('/Galeria',
		'PublicController@galeria')
		->name('usuarios.galeria');

	Route::get('/Galeria/{id}',
		'PublicController@galeria_album')
		->name('usuarios.album');

	Route::get('/Comunidad_Estudiantil',
		'PublicController@comunidad')
		->name('usuarios.comunidad');
	
	Route::get('/Contacto_y_Miembros',
		'PublicController@contactos')
		->name('usuarios.contactos');

	// Menu Inferior

	Route::get('/Calendario',
		'PublicController@calendario')
		->name('usuarios.calendario');	
	
	Route::get('/Informacion',
		'PublicController@informacion')
		->name('usuarios.informacion');
	
	Route::get('/Relaciones',
		'PublicController@relaciones')
	->name('usuarios.relaciones');
	
	Route::get('/Historia',
		'PublicController@historia')
		->name('usuarios.historia');
	
	Route::get('/Asesorias',
		'PublicController@asesorias')
		->name('usuarios.asesorias');

	Route::post('/Asesorias',
		'PublicController@mailAsesoria')
		->name('asesorias.mail');
	
	Route::get('/Brigada',
		'PublicController@formarBrigada')
		->name('usuarios.brigada');

	Route::post('/Brigada',
		'PublicController@mailBrigada')
		->name('brigada.mail');