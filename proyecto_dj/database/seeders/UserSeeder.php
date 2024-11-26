<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create(['name' => 'dj']);
        Role::create(['name' => 'negocio']);
        Role::create(['name' => 'administrador']);


        User::create([
            "nombre" => "Admin",
            "apellidos" => "El Mandator",
            "email" => "admin@dj.com",
            "telefono" => "622622622",
            "password" => "admin1234",
            "tipo_acceso" => "admin",
            'ciudad' => "Madrid",
            'direccion' => "Av. de las Estrellas",

        ])->assignRole('administrador');
        
        User::create([
            "nombre" => "Dj",
            "apellidos" => "Chambea",
            "email" => "dj@dj.com",
            "telefono" => "665544667",
            "tipo_acceso" => "dj",
            "password" => "dj1234",
            'ciudad' => "Madrid",

        ])->assignRole('dj');


        User::create([
            "nombre" => "Negocio",
            "apellidos" => "Bar",
            "email" => "negocio@dj.com",
            "telefono" => "665544663",
            "tipo_acceso" => "negocio",
            "password" => "negocio123",
            'direccion' => "Av. de las vacas",
            'aforo' => "150",
            'id_tipo_local' => "1",

        ])->assignRole('negocio');    
    }

}
