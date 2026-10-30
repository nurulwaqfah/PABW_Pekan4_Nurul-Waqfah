<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PetugasSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            LaporanSeeder::class,
        ]);
        $this->call([
        PetugasSeeder::class,
    ]);
    }
}