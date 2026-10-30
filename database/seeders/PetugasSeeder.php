<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            $email = $faker->unique()->safeEmail();

            User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $faker->name(),
                    'password' => Hash::make('Petugas123!'),
                ]
            );
        }

        User::updateOrCreate(
            ['email' => 'admin@bpbd.test'],
            [
                'name' => 'Admin BPBD',
                'password' => Hash::make('Admin123!'),
            ]
        );
    }
}
