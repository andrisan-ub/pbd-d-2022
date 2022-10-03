<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SyllabusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('syllabus')->insert([
            'id' => '1',
            'course_id' => '111',
            'name' => 'Andri Santoso S.Kom., M.Sc.',
            'author' => 'Rama',
            'head_of_study_program' => 'Ir. Widhy Hayuhardhika Nugraha Putra, S.Kom., M.Kom.'
        ]);
    }
}