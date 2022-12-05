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
        $this->call(FakeDataSeeder::class);
    
        DB::table('rooms')->insert([
        'id' => '111',
        'building' => 'G',
        'room_code' => 'G1.5',
        ]);
        DB::table('rooms')->insert([
            'id' => '112',
            'building' => 'F',
            'room_code' => 'F2.7',
        ]);
        DB::table('rooms')->insert([
            'id' => '113',
            'building' => 'F',
            'room_code' => 'F3.11',
        ]);
    }
}
