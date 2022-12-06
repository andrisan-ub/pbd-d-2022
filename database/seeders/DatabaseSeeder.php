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

       //Seeder Rooms
       DB::table('rooms')->insert([
        'id' => '1',
        'building' => 'G',
        'room_code' => 'G1.2',
        ]);
        DB::table('rooms')->insert([
            'id' => '2',
            'building' => 'G',
            'room_code' => 'G1.3',
        ]);
        DB::table('rooms')->insert([
            'id' => '3',
            'building' => 'F',
            'room_code' => 'F2.2',
        ]);
        DB::table('rooms')->insert([
            'id' => '4',
            'building' => 'F',
            'room_code' => 'F3.2',
        ]);
        DB::table('rooms')->insert([
            'id' => '5',
            'building' => 'F',
            'room_code' => 'F3.11',
        ]);

        //Sedder Shedules
        DB::table('schedules')->insert([
            'id' => '1',
            'course_class_id' => '1',
            'rooms_id' => '1',
            'teacher' => 'Brian Antoni',
            'day' => 'Selasa',
            'start_time' => '08:30:00',
            'end_time' => '09:45:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '2',
            'course_class_id' => '2',
            'rooms_id' => '2',
            'teacher' => 'Anita Shana',
            'day' => 'Rabu',
            'start_time' => '15:15:00',
            'end_time' => '16:45:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '3',
            'course_class_id' => '3',
            'rooms_id' => '3',
            'teacher' => 'Brian Antoni',
            'day' => 'Rabu',
            'start_time' => '07:00:00',
            'end_time' => '08:30:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '4',
            'course_class_id' => '4',
            'rooms_id' => '2',
            'teacher' => 'Shelly Kenn',
            'day' => 'Selasa',
            'start_time' => '14:15:00',
            'end_time' => '16:00:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '5',
            'course_class_id' => '5',
            'rooms_id' => '3',
            'teacher' => 'Anita Shana',
            'day' => 'Senin',
            'start_time' => '14:15:00',
            'end_time' => '15:55:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '6',
            'course_class_id' => '6',
            'rooms_id' => '1',
            'teacher' => 'Brian Antoni',
            'day' => 'Selasa',
            'start_time' => '07:00:00',
            'end_time' => '08:40:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '7',
            'course_class_id' => '7',
            'rooms_id' => '2',
            'teacher' => 'Leo Hideo',
            'day' => 'Kamis',
            'start_time' => '10:30:00',
            'end_time' => '12:10:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '8',
            'course_class_id' => '8',
            'rooms_id' => '3',
            'teacher' => 'Leo Hideo',
            'day' => 'Jumat',
            'start_time' => '07:00:00',
            'end_time' => '08:40:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '9',
            'course_class_id' => '9',
            'rooms_id' => '5',
            'teacher' => 'Sahlan Andrian',
            'day' => 'Selasa',
            'start_time' => '14:15:00',
            'end_time' => '15:55:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '10',
            'course_class_id' => '10',
            'rooms_id' => '3',
            'teacher' => 'Shelly Kenn',
            'day' => 'Rabu',
            'start_time' => '10:30:00',
            'end_time' => '12:10:00',
        ]);

      
    }
}
