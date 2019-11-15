<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        
        Role::create([
        	'name' => 'Admin',
        	'slug' => 'admin',
            'description' => 'Super Administrador: Control Total de la Aplicación',
            'special' => 'all-access',
        	]);
    }
}
