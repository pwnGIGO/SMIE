<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

/*
    Clase que llena la tabla de permisos
*/

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        // Usuario
        Permission::create([
        	'name' => 'Ver Usuarios',
        	'slug' => 'users.index',
        	'description' => 'Usuarios: Lista y navega todos los usuarios del sistema',
        	]);

        Permission::create([
        	'name' => 'Ver detalle de Usuario',
        	'slug' => 'users.show',
        	'description' => 'Usuarios: Ver en detalle cada usuario del sistema',
        	]);

        Permission::create([
        	'name' => 'Editar de Usuario',
        	'slug' => 'users.edit',
        	'description' => 'Usuarios: Edita cualquier dato de un usuario del sistema',
        	]);

        Permission::create([
        	'name' => 'Eliminar Usuario',
        	'slug' => 'users.destroy',
        	'description' => 'Usuarios: Eliminar cualquier usuario del sistema',
        	]);

        // Roles
        Permission::create([
        	'name' => 'Ver Roles',
        	'slug' => 'roles.index',
        	'description' => 'Roles: Lista y navega todos los roles del sistema',
        	]);

        Permission::create([
        	'name' => 'Ver detalle de Rol',
        	'slug' => 'roles.show',
        	'description' => 'Roles: Ver en detalle cada rol del sistema',
        	]);

		Permission::create([
        	'name' => 'Crear de Rol',
        	'slug' => 'roles.create',
        	'description' => 'Roles: Creacion de un rol del sistema',
        	]);


        Permission::create([
        	'name' => 'Editar Roles',
        	'slug' => 'roles.edit',
        	'description' => 'Roles: Edita cualquier dato de un rol del sistema',
        	]);

        Permission::create([
        	'name' => 'Eliminar Rol',
        	'slug' => 'roles.destroy',
        	'description' => 'Roles: Eliminar cualquier rol del sistema',
        	]);

        // Admi
        Permission::create([
            'name' => 'Administrador',
            'slug' => 'admi.admi',
            'description' => 'Administrador: Permite mostrar las funciones de edicion de contenido',
            ]);

        Permission::create([
            'name' => 'Editar Slide',
            'slug' => 'admi.slide',
            'description' => 'Contenido: Permite modificar la seccion de Slide',
            ]);

        Permission::create([
            'name' => 'Editar Cronograma',
            'slug' => 'admi.cronograma',
            'description' => 'Contenido: Permite modificar la seccion de Cronograma',
            ]);

        Permission::create([
            'name' => 'Editar Galeria',
            'slug' => 'admi.galeria',
            'description' => 'Contenido: Permite modificar la seccion de Galeria',
            ]);

        Permission::create([
            'name' => 'Editar Calendario',
            'slug' => 'admi.calendario',
            'description' => 'Contenido: Permite modificar la seccion de Calendario',
            ]);

        Permission::create([
            'name' => 'Editar Informacion',
            'slug' => 'admi.informacion',
            'description' => 'Contenido: Permite modificar la seccion de Informacion',
            ]);

        Permission::create([
            'name' => 'Editar Articulos',
            'slug' => 'admi.articulos',
            'description' => 'Contenido: Permite modificar la seccion de Articulos',
            ]);

        Permission::create([
            'name' => 'Editar Asesorias',
            'slug' => 'admi.asesorias',
            'description' => 'Contenido: Permite modificar la seccion de Asesorias',
            ]);

        Permission::create([
            'name' => 'Editar Brigada',
            'slug' => 'admi.brigada',
            'description' => 'Contenido: Permite modificar la seccion de Brigada',
            ]);

        // Miembro
        Permission::create([
            'name' => 'Ver Articulos',
            'slug' => 'miembro.articulos',
            'description' => 'Miembro: Permite ver la pestaña de miembros de Articulos y Documentos',
            ]);
    }
}
