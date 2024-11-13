<?php

namespace Database\Seeders;

use App\Models\Suscripcion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suscripcion::create([
            "nombre" => "mensual",
        ]);

        Suscripcion::create([
            "nombre" => "bimensual",
        ]);


        Suscripcion::create([
            "nombre" => "trimestral",
        ]);

        
        Suscripcion::create([
            "nombre" => "semestral",
        ]);


        Suscripcion::create([
            "nombre" => "anual",
        ]);

    }
}
