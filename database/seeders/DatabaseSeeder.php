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
    DB::table('dosen_pengampu')->insert([
        'NIP' => '197209191997021001',
        'Nama_Dosen' => 'Welly Purnomo, S.T., M.Kom.',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '197408052001121001',
        'Nama_Dosen' => 'Agus Wahyu Widodo',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '198309222012121003',
        'Nama_Dosen' => 'Issa Arwani',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '197209191997021002',
        'Nama_Dosen' => 'Andri Santoso'
    ]);

    DB::table('rps')->insert([
        'Kode_RPS' => '60001',
        'Bobot_SKS' => '3',
        'Semester' => '3',
        'Tanggal_Penyusunan' => '2021-11-05'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '215150701111031',
        'Nama_Mahasiswa' => 'Firda Kusuma',
        'Semester_MHS' => '3',
    ]);
       
    DB::table('Mahasiswa')->insert([
        'NIM' => '215150700111031',
        'Nama_Mahasiswa' => 'Putri Rais',
        'Semester_MHS' => '3',
    ]);
       
    DB::table('Mahasiswa')->insert([
        'NIM' => '215150700111051',
        'Nama_Mahasiswa' => 'Clarita Yung',
        'Semester_MHS' => '3',
    ]);

    }
}
