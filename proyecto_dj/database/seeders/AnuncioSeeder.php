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
            'telefono' => '655655655',
            'genero_id'=>'1',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/luiggyhm.jpg',
            'ciudad' => 'Madrid',
            'localidad' =>'Parla',
            'tipo_anuncio'=> 'dj',
        ]);

        Anuncio::create([
            'titulo' => 'TGZer0',
            'precio'=> '120',
            'descripcion' => 'Dj Zona Sur Madrid',
            'telefono' => '622622622',
            'genero_id'=>'2',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/TGZer0.jpg',
            'ciudad' => 'Toledo',
            'localidad'=> 'Mentrida',
            'tipo_anuncio'=> 'dj'
        ]);



        //Discotecas
        Anuncio::create([
            'titulo' => 'Ventura',
            'precio'=> '100',
            'descripcion' => 'Discoteca pequeña en Madrid',
            'telefono' => '633633633',
            'genero_id'=>'1',
            'tipo_local'=>'1',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/Ventura.jpg',
            'direccion'=> 'Av. de por ahí',
            'aforo' => '100',
            'tipo_anuncio'=> 'negocio',
        ]);

        Anuncio::create([
            'titulo' => 'Avanti',
            'precio'=> '80',
            'descripcion' => 'Discoteca pequeña en Madrid',
            'telefono' => '333222111',
            'genero_id'=>'4',
            'tipo_local'=>'3',
            'otros_generos'=>'House, Regueton, comercial',
            'imagen' => '/anuncios/dj/Ventura.jpg',
            'direccion'=> 'Calle Rorrejon',
            'aforo' => '100',
            'tipo_anuncio'=> 'negocio',
        ]);

        Anuncio::create([
            'titulo' => 'apeadero',
            'precio'=> '100',
            'descripcion' => 'Discoteca pequeña en Madrid',
            'telefono' => '633633633',
            'genero_id'=>'3',
            'tipo_local'=>'3',
            'otros_generos'=>'House',
            'imagen' => '/anuncios/dj/Ventura.jpg',
            'direccion'=> 'pinto',
            'aforo' => '50',
            'tipo_anuncio'=> 'negocio',
        ]);

        Anuncio::create([
            'titulo' => 'chelsea',
            'precio'=> '100',
            'descripcion' => 'Discoteca pequeña en Madrid',
            'telefono' => '111111111',
            'genero_id'=>'2',
            'tipo_local'=>'3',
            'otros_generos'=>'House, Regueton, Bachata, Salsa',
            'imagen' => '/anuncios/dj/Ventura.jpg',
            'direccion'=> 'enfreente Siroco',
            'aforo' => '150',
            'tipo_anuncio'=> 'negocio',
        ]);

    }
}
