<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            jurusanSeeder::class,
            dosenSeeder::class,
            mahasiswaSeeder::class,
            mata_kuliahSeeder::class,
            dosen_has_mata_kuliahSeeder::class,
            nilaiSeeder::class
        ]);
    }
}
