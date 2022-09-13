<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class nilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nilai')->insert([
            'id' => 2021123,
            'nilai_keaktifan' => '80',
            'nilai_pratikum' => '80',
            'nilai_uas' => '78',
            'nilai_uts' => '78',
            'nilai_tugas' => '90',
            'NIP' => 12251783914,
            'NIM' => 22161781910877
        ]); 

        DB::table('nilai')->insert([
            'id' => 2021124,
            'nilai_keaktifan' => '80',
            'nilai_pratikum' => '90',
            'nilai_uas' => '78',
            'nilai_uts' => '80',
            'nilai_tugas' => '90',
            'NIP' => 12251783913,
            'NIM' => 22161781910011
        ]);

        DB::table('nilai')->insert([
            'id' => 2021125,
            'nilai_keaktifan' => '89',
            'nilai_pratikum' => '85',
            'nilai_uas' => '76',
            'nilai_uts' => '80',
            'nilai_tugas' => '95',
            'NIP' => 12251783912,
            'NIM' => 22161781910099
        ]);

        DB::table('nilai')->insert([
            'id' => 2021126,
            'nilai_keaktifan' => '96',
            'nilai_pratikum' => '85',
            'nilai_uas' => '80',
            'nilai_uts' => '90',
            'nilai_tugas' => '95',
            'NIP' => 12251783912,
            'NIM' => 22161781910088
        ]);

        DB::table('nilai')->insert([
            'id' => 2021127,
            'nilai_keaktifan' => '70',
            'nilai_pratikum' => '80',
            'nilai_uas' => '85',
            'nilai_uts' => '90',
            'nilai_tugas' => '95',
            'NIP' => 12251783911,
            'NIM' =>  22161781910099,
        ]);
    }
}
