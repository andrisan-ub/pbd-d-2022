<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_program')->insert([
            'id'=>1,
            'faculty_id'=>1,
            'name'=>'Teknologi Informasi'
        ]);

        DB::table('study_program')->insert([
            'id'=>2,
            'faculty_id'=>1,
            'name'=>'Pendidikan Teknologi Informasi'
        ]);

        DB::table('study_program')->insert([
            'id'=>3,
            'faculty_id'=>1,
            'name'=>'Teknik Informatika'
        ]);
    }
}
