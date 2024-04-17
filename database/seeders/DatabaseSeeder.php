<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            TypeUserSeeder::class,
            ConsultationSeeder::class,
            ConfigPaymentSeeder::class,
            SpecialistSeeder::class,
        ]);
    }
}