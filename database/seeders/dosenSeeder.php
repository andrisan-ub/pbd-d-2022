<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'NIP' => 12251783910,
            'nama_dosen' => "Andri Santoso",
            'no_telp' => "087761829121",
            'alamat' => "Jl. Cikampek no. 1"
        ]);

        DB::table('dosen')->insert([
            'NIP' => 12251783911,
            'nama_dosen' => "Adam Hendra",
            'no_telp' => "087183189172",
            'alamat' => "Jl. Bogor no. 19"
        ]);

        DB::table('dosen')->insert([
            'NIP' => 12251783912,
            'nama_dosen' => "Issa Arwani",
            'no_telp' => "087781921933",
            'alamat' => "Jl. Jakarta no.23"
        ]);

        DB::table('dosen')->insert([
            'NIP' => 12251783913,
            'nama_dosen' => "Herman Tolle",
            'no_telp' => "087761728192",
            'alamat' => "Jl. Bandung no.44"
        ]);

        DB::table('dosen')->insert([
            'NIP' => 12251783914,
            'nama_dosen' => "Dian Eka",
            'no_telp' => "0871728917292",
            'alamat' => "Jl. Surabaya no.23"
        ]);
    }
}
