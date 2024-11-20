<?php

namespace Database\Seeders;

use App\Models\Negocio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Negocio::create([
            'nombre' => 'Cafe Rock Bar 82',
            'tipo_local_id' => '1',
            'direccion' => 'calle pinto, 32',
            'descripcion' => 'Discoteca con tematica ochentera',
            'telefono' => '611611611',
            'aforo' => '100',
            'imagen' => '/home/asset',
        ]);
        
        Negocio::create([
            'nombre' => 'Chelsea',
            'tipo_local_id' => '2',
            'direccion' => 'calle Torrejon, 32',
            'descripcion' => 'Pub de copas, sala de baile',
            'telefono' => '633633633',
            'aforo' => '150',
            'imagen' => '/home/asset',
        ]);

        Negocio::create([
            'nombre' => 'Asador de Parla',
            'tipo_local_id' => '3',
            'direccion' => 'calle poligono, 30',
            'descripcion' => 'Restaurante asador',
            'telefono' => '611611611',
            'aforo' => '500',
            'imagen' => '/home/asset',
        ]);
    }
}
