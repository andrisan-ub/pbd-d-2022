<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         DB::table('Dosen')->insert([
            'Nama' => 'Andri Santoso',
            'NIP' => '21515070000001'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Fajar Pradana',
            'NIP' => '21515070000002'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Alfi Nur Rusydi',
            'NIP' => '21515070000003'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Bayu Rahayudi',
            'NIP' => '21515070000004'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Aryo Pinandito',
            'NIP' => '21515070000005'
        ]);
        
    }
}
