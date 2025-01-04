<?php

namespace Database\Seeders;

use App\Models\FtpUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FtpUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FtpUser::create([
            'id'=>'1001',
            'alias' => 'admin',
            'password' => 'admin1234',
            'directorio_raiz' => '/home/musica',
            'tipo_user' => 'admin',
            'estado' => "activo",
            'user_id' => '1',
        ]);

        FtpUser::create([
            'id'=>'1002',
            'alias' => 'cliente',
            'password' => 'cliente1234',
            'directorio_raiz' => '/home/musica',
            'tipo_user' => 'cliente',
            'estado' => "activo",
            'user_id' => '2',
        ]);
        

    }
}
