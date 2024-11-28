<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call (LocalSeeder::class);
        $this->call (GeneroSeeder::class);
        $this->call (UserSeeder::class);
        $this->call (AnuncioSeeder::class);
        $this->call (FtpUserSeeder::class);
    }
}
