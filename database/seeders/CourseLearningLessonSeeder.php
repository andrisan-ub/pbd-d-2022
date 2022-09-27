<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CourseLearningLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_learning_outcome')->insert([
            'id' => 'M1',
            'position' => '1',
            'description' => 'Mampu memahami konsep pemrograman basis data untuk menunjang integrasi data dalam pengembangan aplikasi',
        ]);
        DB::table('course_learning_outcome')->insert([
            'id' => 'M2',
            'position' => '2',
            'description' => 'Mampu merancang dan mengimplementasikan logika pemrograman dalam stored procedure, store function, cursor, dan trigger',
        ]);
        DB::table('course_learning_outcome')->insert([
            'id' => 'M3',
            'position' => '3',
            'description' => 'Mampu mengintegrasikan pemrograman basis data dalam aplikasi',
        ]);
        DB::table('course_learning_outcome')->insert([
            'id' => 'M4',
            'position' => '4',
            'description' => 'Mampu menyampaikan hasil rancangan dan implementasi projek secara ilmiah',
        ]);
    }
}
