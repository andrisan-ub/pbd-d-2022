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
            'ID_Prodi' => '22',
            'Nama_Prodi' => 'Sistem Informasi',
            'Jenjang' => 'S1',
            'Jurusan_ID_Jurusan' => '2',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150701111001',
            'Nama_mahasiswa' => 'Dianty Annisa',
            'Dosen_NIP' =>'12345',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150701111002',
            'Nama_mahasiswa' => 'Rhama Renaldi Jakfar',
            'Dosen_NIP' =>'12344',
        ]);

        DB::table('mata_kuliah')->insert([
            'ID_MK' => '0011',
            'Nama_MK' => 'Pengembangan Aplikasi Web',
            'Kode_MK' => '001111',
            'Jumlah_SKS' => '3',
            'Thn_MK' => '2022',
            'IsWajib' => true,
            'Mahasiswa_NIM' => '215150701111001',
            'Dosen_NIP' =>'12345',
            'Prodi_ID_Prodi' => '11',
            'Prodi_Jurusan_ID_Jurusan' => '1',
        ]);

        DB::table('mata_kuliah')->insert([
            'ID_MK' => '0022',
            'Nama_MK' => 'Internet of Things',
            'Kode_MK' => '002222',
            'Jumlah_SKS' => '4',
            'Thn_MK' => '2022',
            'IsWajib' => true,
            'Mahasiswa_NIM' => '215150701111002',
            'Dosen_NIP' =>'12344',
            'Prodi_ID_Prodi' => '22',
            'Prodi_Jurusan_ID_Jurusan' => '2',
        ]);

    }
}
