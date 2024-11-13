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
            "genero" => "House",
            "posicion" => "5",
        ]);


        Genero::create([
            "genero" => "Deep House",
            "posicion" => "10",
        ]);


        Genero::create([
            "genero" => "Techno",
            "posicion" => "15",
        ]);


        Genero::create([
            "genero" => "Comercial",
            "posicion" => "20",
        ]);


        Genero::create([
            "genero" => "Reguetón",
            "posicion" => "25",
        ]);


        Genero::create([
            "genero" => "latino",
            "posicion" => "35",
        ]);

        Genero::create([
            "genero" => "Disco 80's",
            "posicion" => "45",
        ]);

        
    }
}
