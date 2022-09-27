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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('student')->insert([
            'id' => 001,
            'student id' => 215150701111031
        ]);

        DB::table('student')->insert([
            'id' => 002,
            'student id' => 215150700111043
        ]);

        DB::table('student')->insert([
            'id' => 003,
            'student id' => 215150701111032
        ]);

        DB::table('student')->insert([
            'id' => 004,
            'student id' => 215150701111033
        ]);

        DB::table('student')->insert([
            'id' => 005,
            'student id' => 215150701111034
        ]);

        DB::table('student')->insert([
            'id' => 006,
            'student id' => 215150701111035
        ]);

        DB::table('student')->insert([
            'id' => 007,
            'student id' => 215150701111036
        ]);

        DB::table('student')->insert([
            'id' => 008,
            'student id' => 215150701111037
        ]);

        DB::table('student')->insert([
            'id' => 009,
            'student id' => 215150701111038
        ]);

        DB::table('student')->insert([
            'id' => 010,
            'student id' => 215150701111039
        ]);
    }
}
