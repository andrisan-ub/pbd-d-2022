<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Criterion_levelSeeder extends Seeder
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
    DB::table('criterion_level')->insert([
        'id' => 1,
        'point' => 2.5,
        'title' => 'Baik',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 2,
        'point' => 2,
        'title' => 'Cukup',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 3,
        'point' => 1,
        'title' => 'Kurang',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 4,
        'point' => 7.5,
        'title' => 'Baik',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 5,
        'point' => 5,
        'title' => 'Cukup',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 6,
        'point' => 2,
        'title' => 'Kurang',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 7,
        'point' => 2.5,
        'title' => 'Baik',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 8,
        'point' => 2,
        'title' => 'Cukup',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 9,
        'point' => 1,
        'title' => 'Kurang',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 10,
        'point' => 2.5,
        'title' => 'Baik',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 11,
        'point' => 2,
        'title' => 'Cukup',
    ]);

    DB::table('criterion_level')->insert([
        'id' => 12,
        'point' => 1,
        'title' => 'Kurang',
    ]);

   }
}
