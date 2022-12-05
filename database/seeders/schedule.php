<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class schedule extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert([
            'id' => '222',
            'course_class_id' => '5gka2h68',
            'rooms_id' => 'G1.5',
            'teacher' => 'Brian Antoni, S.Kom',
            'day' => 'Selasa',
            'start_time' => '08:30:00',
            'end_time' => '09:45:00',
        ]);

        DB::table('schedule')->insert([
            'id' => '333',
            'course_class_id' => 'gsu1ml63',
            'rooms_id' => 'F2.7',
            'teacher' => 'Anita Shana, S.Kom',
            'day' => 'Rabu',
            'start_time' => '15:15:00',
            'end_time' => '16:45:00',
        ]);

        DB::table('schedule')->insert([
            'id' => '444',
            'course_class_id' => '2hla09zv',
            'rooms_id' => 'F2.7',
            'teacher' => 'Brian Antoni, S.Kom',
            'day' => 'Rabu',
            'start_time' => '07:00:00',
            'end_time' => '08:30:00',
        ]);

        DB::table('schedule')->insert([
            'id' => '555',
            'course_class_id' => 'rap09sn7',
            'rooms_id' => 'F3.11',
            'teacher' => 'Sahlan Andrian, S.Kom',
            'day' => 'Jumat',
            'start_time' => '13:15:00',
            'end_time' => '15:00:00',
        ]);

        DB::table('schedule')->insert([
            'id' => '666',
            'course_class_id' => '41fk0a85',
            'rooms_id' => 'G1.5',
            'teacher' => 'Anita Shana, S.Kom',
            'day' => 'Senin',
            'start_time' => '15:25:00',
            'end_time' => '16:15:00',
        ]);
    }
}