<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genero::create([
            "nombre" => "Comercial",
            "posicion" => "5",
        ]);


        Genero::create([
            "nombre" => "Deep House",
            "posicion" => "10",
        ]);


        Genero::create([
            "nombre" => "Techno",
            "posicion" => "15",
        ]);


        Genero::create([
            "nombre" => "House",
            "posicion" => "20",
        ]);


        Genero::create([
            "nombre" => "Reguetón",
            "posicion" => "25",
        ]);


        Genero::create([
            "nombre" => "Latino",
            "posicion" => "35",
        ]);

        Genero::create([
            "nombre" => "Disco 80's",
            "posicion" => "45",
        ]);

        
    }
}
