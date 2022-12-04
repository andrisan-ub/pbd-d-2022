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

        DB::table('notifications')->insert([
            'id' => '1',  
            'assignments_id' => '1',
            'jenis_notifikasi' => 'reminder',
            'judul_notifikasi'=> 'ADSI Modul 10',
            'pesan_notifikasi'=>'H-1 deadline',
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
            
        ]);

        DB::table('notifications')->insert([
            'id' => '2',  
            'assignments_id' => '2',
            'jenis_notifikasi' => 'announcement',
            'judul_notifikasi'=> 'Modul 11',
            'pesan_notifikasi'=>'PAW Modul 11 deadline 12/12/2021',
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
            
        ]);

        DB::table('notifications')->insert([
            'id' => '3',  
            'assignments_id' => '3',
            'jenis_notifikasi' => 'reminder',
            'judul_notifikasi'=> 'PBD Modul 9',
            'pesan_notifikasi'=>'H-1 Deadline',
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
            
        ]);


    }
}
