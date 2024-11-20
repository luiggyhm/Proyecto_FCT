<?php

namespace Database\Seeders;

use App\Models\Local;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Local::create([
            'tipo_local' => 'Discoteca',
            'descripcion' => 'Sala, con o sin reservados, licencia permitida hasta las 6 a.m',
        ]);

        Local::create([
            'tipo_local' => 'Pub',
            'descripcion' => 'Sala, con o sin asientos, licencia permitida hasta las 3 o 4 a.m',
        ]);

        Local::create([
            'tipo_local' => 'Restaurante',
            'descripcion' => 'Sala, con sitio para comer, licencia permitida hasta la 1 a.m',
        ]);

        Local::create([
            'tipo_local' => 'Local',
            'descripcion' => 'Local, sitio de reuniones varias, licencia permitida hasta la 11 p.m',
        ]);
    }
}
