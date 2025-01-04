<?php

namespace Database\Seeders;

use App\Models\AnuncioUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnuncioUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'1',
        ]);

        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'2',
        ]);

        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'3',
        ]);

        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'4',
        ]);

        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'5',
        ]);

        AnuncioUser::create([
            'user_id'=>'1',
            'anuncio_id'=>'6',
        ]);
    }
}
