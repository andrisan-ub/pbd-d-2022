<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dosen_has_mata_kuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen_has_mata_kuliah')->insert([
            'NIP' => 12251783910,
            'kode_MK' => 12765
        ]);

        DB::table('dosen_has_mata_kuliah')->insert([
            'NIP' => 12251783911,
            'kode_MK' => 23980
        ]);

        DB::table('dosen_has_mata_kuliah')->insert([
            'NIP' => 12251783912,
            'kode_MK' => 56784
        ]);
        
        DB::table('dosen_has_mata_kuliah')->insert([
            'NIP' => 12251783913,
            'kode_MK' => 61009
        ]);

        DB::table('dosen_has_mata_kuliah')->insert([
            'NIP' => 12251783914,
            'kode_MK' => 61007
        ]);
    }
}
