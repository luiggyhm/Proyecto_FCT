<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anuncio::create([
            'titulo' => 'Luiggyhm',
            'precio'=> '120',
            'descripcion' => 'Dj Zona Sur Madrid',
            'genero_id'=>'1',
            'tipo_local'=>'',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/luiggyhm.jpg',
        ]);

        Anuncio::create([
            'titulo' => 'Ventura',
            'precio'=> '100',
            'descripcion' => 'Discoteca pequeña en Madrid',
            'genero_id'=>'1',
            'tipo_local'=>'Discoteca',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/Ventura.jpg',
        ]);

    }
}
