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
        'room_code' => 'G1.5',
        ]);
        DB::table('rooms')->insert([
            'id' => '2',
            'building' => 'F',
            'room_code' => 'F2.7',
        ]);
        DB::table('rooms')->insert([
            'id' => '3',
            'building' => 'F',
            'room_code' => 'F3.11',
        ]);


        //Sedder Shedules
        DB::table('schedules')->insert([
            'id' => '1',
            'course_class_id' => '1',
            'rooms_id' => '1',
            'teacher' => 'Brian Antoni, S.Kom',
            'day' => 'Selasa',
            'start_time' => '08:30:00',
            'end_time' => '09:45:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '2',
            'course_class_id' => '1',
            'rooms_id' => '2',
            'teacher' => 'Anita Shana, S.Kom',
            'day' => 'Rabu',
            'start_time' => '15:15:00',
            'end_time' => '16:45:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '3',
            'course_class_id' => '2',
            'rooms_id' => '3',
            'teacher' => 'Brian Antoni, S.Kom',
            'day' => 'Rabu',
            'start_time' => '07:00:00',
            'end_time' => '08:30:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '4',
            'course_class_id' => '2',
            'rooms_id' => '2',
            'teacher' => 'Sahlan Andrian, S.Kom',
            'day' => 'Jumat',
            'start_time' => '13:15:00',
            'end_time' => '15:00:00',
        ]);

        DB::table('schedules')->insert([
            'id' => '5',
            'course_class_id' => '2',
            'rooms_id' => '3',
            'teacher' => 'Anita Shana, S.Kom',
            'day' => 'Senin',
            'start_time' => '15:25:00',
            'end_time' => '16:15:00',
        ]);
    }
}
