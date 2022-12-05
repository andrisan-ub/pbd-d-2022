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
        ////////////////////////////////////start seeder questions////////////////////////////////////
        DB::table('questions')->insert([
            'question'=>'Dosen mampu menyampaikan materi kuliah secara maksimal'
        ]);

        DB::table('questions')->insert([
            'question'=>'Dosen memperlakukan Mahasiswa secara adil selama kegiatan perkuliahan'
        ]);

        DB::table('questions')->insert([
            'question'=>'Dosen memberikan feedback terhadap hasil kerja Mahasiswa'
        ]);
        
        DB::table('questions')->insert([
            'question'=>'Mahasiswa mampu memahami materi kuliah yang diberikan Dosen'
        ]);

        DB::table('questions')->insert([
            'question'=>'Mahasiswa mampu mengimplementasikan materi kuliah yang diberikan Dosen'
        ]);
        ////////////////////////////////////end seeder questions////////////////////////////////////

        ////////////////////////////////////start seeder satisfactions////////////////////////////////////
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
        ////////////////////////////////////end seeder satisfactions////////////////////////////////////

        ////////////////////////////////////start seeder user_answers////////////////////////////////////
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>1,
            'satisfactions_id'=>1
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>2,
            'satisfactions_id'=>2
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>3,
            'satisfactions_id'=>3
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>4,
            'satisfactions_id'=>4
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>5,
            'satisfactions_id'=>5
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>2, 
            'questions_id'=>1,
            'satisfactions_id'=>1
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>2, 
            'questions_id'=>2,
            'satisfactions_id'=>2
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>2, 
            'questions_id'=>3,
            'satisfactions_id'=>3
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>2, 
            'questions_id'=>4,
            'satisfactions_id'=>4
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>2, 
            'questions_id'=>5,
            'satisfactions_id'=>5
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>1,
            'satisfactions_id'=>1
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>2,
            'satisfactions_id'=>2
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>3,
            'satisfactions_id'=>3
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>4,
            'satisfactions_id'=>4
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>5,
            'satisfactions_id'=>5
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>1,
            'satisfactions_id'=>1
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>2,
            'satisfactions_id'=>2
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>3,
            'satisfactions_id'=>3
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>4,
            'satisfactions_id'=>4
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>5,
            'satisfactions_id'=>5
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>1,
            'satisfactions_id'=>1
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>2,
            'satisfactions_id'=>2
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>3,
            'satisfactions_id'=>3
        ]);
        
        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>4,
            'satisfactions_id'=>4
        ]);

        DB::table('user_answers')->insert([
            'users_id'=>7,
            'course_classes_id'=>1, 
            'questions_id'=>5,
            'satisfactions_id'=>5
        ]);
        ////////////////////////////////////end seeder user_answers////////////////////////////////////

    }
}
