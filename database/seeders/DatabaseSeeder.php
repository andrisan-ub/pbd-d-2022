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

        DB::table('mahasiswa')->insert([
            'name' => 'Rafli Ardiansyah',
            'nim' => '215150701111030',
            'semester' => 3
        ]);

        DB::table('mahasiswa')->insert([
            'name' => 'Muchammad Saifurrijaal',
            'nim' => '215150701111006',
            'semester' => 3
        ]);

        DB::table('mahasiswa')->insert([
            'name' => 'Redo Meire',
            'nim' => '215150701111032',
            'semester' => 3
        ]);

        DB::table('dosen')->insert([
            'nama' => 'Muhammad Herman',
            'nidn' => '12345678'
        ]);

        DB::table('matakuliah')->insert([
            'id' => 1,
            'nama' => 'Pemrograman Basis Data',
            'sks' => 3
        ]);

        DB::table('dosenmatkul')->insert([
            'id' => 1,
            'nidn' => '12345678',
            'id_matkul' => 1
        ]);

        DB::table('mahasiswamatkul')->insert([
            'id' => 1,
            'nim' => '215150701111006',
            'id_matkul' => 1
        ]);

        DB::table('mahasiswamatkul')->insert([
            'id' => 2,
            'nim' => '215150701111032',
            'id_matkul' => 1
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK1'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK2'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK3'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK4'
        ]);


       


    }
}
