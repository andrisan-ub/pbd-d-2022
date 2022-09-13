<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'id' => 2021111,
            'nama_jurusan' => "Teknik Informatika",
        ]);

        DB::table('jurusan')->insert([
            'id' => 2021112,
            'nama_jurusan' => "Teknik Komputer",
        ]);

        DB::table('jurusan')->insert([
            'id' => 2021113,
            'nama_jurusan' => "Sistem Informasi",
        ]);

        DB::table('jurusan')->insert([
            'id' => 2021114,
            'nama_jurusan' => "Teknologi Informasi",
        ]);

        DB::table('jurusan')->insert([
            'id' => 2021115,
            'nama_jurusan' => "Pendidikan TI",
        ]);
    }
}
