<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Seeder Rooms
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
