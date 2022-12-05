<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class FinalProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        'id'=>1,
        'question'=>'Dosen mampu memberikan materi kuliah secara maksimal'
    ]);

    DB::table('questions')->insert([
        'id'=>2,
        'question'=>'Dosen memperlakukan Mahasiswa secara adil selama kegiatan perkuliahan'
    ]);

    DB::table('questions')->insert([
        'id'=>3,
        'question'=>'Mahasiswa mampu memahami materi kuliah yang diberikan Dosen'
    ]);

    DB::table('satisfactions')->insert([
        'id'=>1,
        'point'=>1,
        'description'=>'Sangat Tidak Setuju'
    ]);

    DB::table('satisfactions')->insert([
        'id'=>2,
        'point'=>2,
        'description'=>'Tidak Setuju'
    ]);

    DB::table('satisfactions')->insert([
        'id'=>3,
        'point'=>3,
        'description'=>'Cukup'
    ]);

    DB::table('satisfactions')->insert([
        'id'=>4,
        'point'=>4,
        'description'=>'Setuju'
    ]);

    DB::table('satisfactions')->insert([
        'id'=>5,
        'point'=>5,
        'description'=>'Sangat Setuju'
    ]);

    // DB::table('user_answers')->insert([
    //     'id'=>1,
    //     'users_id'=>5,
    //     'questions_id'=>1,
    //     'satisfactions_id'=>5
    // ]);   
    }
}
