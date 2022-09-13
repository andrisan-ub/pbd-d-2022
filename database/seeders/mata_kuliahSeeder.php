<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class mata_kuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            'kode' => 12765,
            'nama_matkul' => 'Pengembangan Aplikasi Web',
            'sks' => 4,
            'NIM' => '22161781910877'
        ]); 

        DB::table('mata_kuliah')->insert([
            'kode' => 23980,
            'nama_matkul' => 'Pemrograman Basis Data',
            'sks' => 3,
            'NIM' => '22161781910088'
        ]); 

        DB::table('mata_kuliah')->insert([
            'kode' => 56784,
            'nama_matkul' => 'Etika Profesi',
            'sks' => 2,
            'NIM' => '22161781910099'
        ]); 

        DB::table('mata_kuliah')->insert([
            'kode' => 61009,
            'nama_matkul' => 'Jaringan Komputer Dasar',
            'sks' => 3,
            'NIM' => '22161781910010'
        ]); 

        DB::table('mata_kuliah')->insert([
            'kode' => 61007,
            'nama_matkul' => 'Algoritma dan Struktur Data',
            'sks' => 4,
            'NIM' => '22161781910011'
        ]);
    }
}
