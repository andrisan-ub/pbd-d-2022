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
        DB::table('jurusan')->insert([
            'ID_Jurusan' => '1',
            'Nama_Jurusan' => 'Teknik Informatika',
        ]);

        DB::table('jurusan')->insert([
            'ID_Jurusan' => '2',
            'Nama_Jurusan' => 'Sistem Informasi',
        ]);


    }
}
