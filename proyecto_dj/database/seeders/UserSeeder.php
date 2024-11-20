<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            "nombre" => "Admin",
            "apellidos" => "El Mandator",
            "email" => "admin@dj.com",
            "telefono" => "622622622",
            "password" => "admin1234",
            "tipo_acceso" => "admin",
            "suscripcion_id" => '1',
        ]); //así asignamos los roles ->assignRole('admin');
        
        User::create([
            "nombre" => "Dj",
            "apellidos" => "Chambea",
            "email" => "dj@dj.com",
            "telefono" => "665544667",
            "tipo_acceso" => "dj",
            "password" => "dj1234",
            "suscripcion_id" => '2',
        ]);         //así asignamos los roles ->assignRole('dj');


        User::create([
            "nombre" => "Negocio",
            "apellidos" => "Bar",
            "email" => "negocio@dj.com",
            "telefono" => "665544663",
            "tipo_acceso" => "negocio",
            "password" => "negocio123",            
            "suscripcion_id" => '3',
        ]);         //así asignamos los roles ->assignRole('interesado');    
    }

}
