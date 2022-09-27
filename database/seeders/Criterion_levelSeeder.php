<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
    DB::table('criterion')->insert([
        'id' => 001,
        'point' => 5,
        'title' => 'Baik',
    ]);

    DB::table('criterion')->insert([
        'id' => 002,
        'point' => 4,
        'title' => 'Cukup',
    ]);

    DB::table('criterion')->insert([
        'id' => 003,
        'point' => 3,
        'title' => 'Kurang',
    ]);

    DB::table('criterion')->insert([
        'id' => 004,
        'point' => 2,
        'title' => 'Baik',
    ]);

    DB::table('criterion')->insert([
        'id' => 005,
        'point' => 1,
        'title' => 'Cukup',
    ]);

    DB::table('criterion')->insert([
        'id' => 001,
        'point' => 5,
        'title' => 'Kurang',
    ]);

    DB::table('criterion')->insert([
        'id' => 002,
        'point' => 4,
        'title' => 'Baik',
    ]);

    DB::table('criterion')->insert([
        'id' => 003,
        'point' => 3,
        'title' => 'Cukup',
    ]);

    DB::table('criterion')->insert([
        'id' => 004,
        'point' => 2,
        'title' => 'Kurang',
    ]);

    DB::table('criterion')->insert([
        'id' => 005,
        'point' => 1,
        'title' => 'Baik',
    ]);

    DB::table('criterion')->insert([
        'id' => 003,
        'point' => 3,
        'title' => 'Cukup',
    ]);

    DB::table('criterion')->insert([
        'id' => 004,
        'point' => 2,
        'title' => 'Kurang',
    ]);
    
   }
}