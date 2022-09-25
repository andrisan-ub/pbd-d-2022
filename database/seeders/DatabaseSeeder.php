<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
