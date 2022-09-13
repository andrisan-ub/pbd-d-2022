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


        DB::table('dosen')->insert([
            'NIP' => '12344',
            'Nama_Dosen' => 'Agus Budianto',
            'NIDN' => '44321',
        ]);

        DB::table('dosen')->insert([
            'NIP' => '12345',
            'Nama_Dosen' => 'Siti Agustina',
            'NIDN' => '54321',
        ]);


        DB::table('prodi')->insert([
            'ID_Prodi' => '11',
            'Nama_Prodi' => 'Teknik Informatika',
            'Jenjang' => 'S1',
            'Jurusan_ID_Jurusan' => '1',
        ]);


        DB::table('prodi')->insert([
            'ID_Prodi' => '21',
            'Nama_Prodi' => 'Sistem Informasi',
            'Jenjang' => 'S1',
            'Jurusan_ID_Jurusan' => '2',
        ]);

        


    }
}
