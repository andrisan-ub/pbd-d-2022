<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LLO_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('lesson_learning_outcome')->insert([
            'id' => 'L1',  
            'position' => '',
            'description' => 'Mampu memahami konsep dasar pemrograman database dan struktur stored procedure',
            // 'clo_id' => '',
        ]);

        DB::table('lesson_learning_outcome')->insert([
            'id' => 'L2',  
            'position' => '',
            'description' => 'Mampu mengimplementasikan logika pemrograman dalam stored procedure',
            // 'clo_id' => '',
        ]);

        DB::table('lesson_learning_outcome')->insert([
            'id' => 'L3',  
            'position' => '',
            'description' => 'Mampu mengimplementasikan cursor, function, dan trigger',
            // 'clo_id' => '',
        ]);

        DB::table('lesson_learning_outcome')->insert([
            'id' => 'L4',  
            'position' => '',
            'description' => 'Mampu merancang dan mengimplementasikan dynamic sql dan mengintegrasikannya dalam aplikasi',
            // 'clo_id' => '',
        ]);

        DB::table('lesson_learning_outcome')->insert([
            'id' => 'L5',  
            'position' => '',
            'description' => 'Mampu menyampaikan hasil progres rancangan dan implementasi projek',
            // 'clo_id' => '',
        ]);



    }
}
