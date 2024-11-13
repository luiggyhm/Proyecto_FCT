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
            "nombre" => "Dj",
            "email" => "dj@dj.com",
            "telefono" => "665544663",
            "password" => "entro1234"
            
        ]);         //así asignamos los roles ->assignRole('dj');


        User::create([
            "nombre" => "Interesado",
            "email" => "interesado@dj.com",
            "telefono" => "665544663",
            "password" => "entro123"
        ]);         //así asignamos los roles ->assignRole('interesado');

        
        User::create([
            "nombre" => "admin",
            "email" => "admin@dj.com",
            "telefono" => "665544663",
            "password" => "admin123"
        ]);         //así asignamos los roles ->assignRole('admin');
    }
}
