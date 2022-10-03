<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('student')->insert([
            'id' => 1,
            'student id' => 215150701111031
        ]);

        DB::table('student')->insert([
            'id' => 2,
            'student id' => 215150700111043
        ]);

        DB::table('student')->insert([
            'id' => 3,
            'student id' => 215150701111032
        ]);

        DB::table('student')->insert([
            'id' => 4,
            'student id' => 215150701111033
        ]);

        DB::table('student')->insert([
            'id' => 5,
            'student id' => 215150701111034
        ]);

        DB::table('student')->insert([
            'id' => 6,
            'student id' => 215150701111035
        ]);

        DB::table('student')->insert([
            'id' => 7,
            'student id' => 215150701111036
        ]);

        DB::table('student')->insert([
            'id' => 8,
            'student id' => 215150701111037
        ]);

        DB::table('student')->insert([
            'id' => 9,
            'student id' => 215150701111038
        ]);

        DB::table('student')->insert([
            'id' => 10,
            'student id' => 215150701111039
        ]);
    }
}
