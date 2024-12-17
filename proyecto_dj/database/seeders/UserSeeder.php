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
            "tipo_acceso" => "admin",
            "password" => "admin1234",
        ])->assignRole('administrador');
        
        User::create([
            "nombre" => "Dj",
            "apellidos" => "Chambea",
            "email" => "dj@dj.com",
            "tipo_acceso" => "dj",
            "password" => "dj1234",
        ])->assignRole('dj');


        User::create([
            "nombre" => "Negocio",
            "apellidos" => "Bar",
            "email" => "negocio@dj.com",
            "tipo_acceso" => "negocio",
            "password" => "negocio123",
        ])->assignRole('negocio');    
    }

}
