<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'NIM' => 22161781910877,
            'nama_Mahasiswa' => "Yehezkiel Imanuel",
            'no_telp' => "087865819278",
            'angkatan' => "2021",
            'id_jurusan' => "2021111"
        ]); 

        DB::table('mahasiswa')->insert([
            'NIM' => 22161781910088,
            'nama_Mahasiswa' => "Diajeng Kinasih",
            'no_telp' => "081336578970",
            'angkatan' => "2021",
            'id_jurusan' => "2021112"
        ]); 

        DB::table('mahasiswa')->insert([
            'NIM' =>  22161781910099,
            'nama_Mahasiswa' => "Alishza Putri",
            'no_telp' => "087875425697",
            'angkatan' => "2021",
            'id_jurusan' => "2021113"
        ]); 

        DB::table('mahasiswa')->insert([
            'NIM' =>  22161781910010,
            'nama_Mahasiswa' => "Nazwa Annila",
            'no_telp' => "081876978900",
            'angkatan' => "2021",
            'id_jurusan' => "2021114"
        ]); 
        
        DB::table('mahasiswa')->insert([
            'NIM' =>  22161781910011,
            'nama_Mahasiswa' => "Ridha Annisa",
            'no_telp' => "08187697865",
            'angkatan' => "2021",
            'id_jurusan' => "2021115"
        ]);
    }
}
