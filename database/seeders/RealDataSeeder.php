<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crisis_center')->insert([[
            'id' => 1,
            'student_user_id' => 10,
            'student_program_id' => 1,
            'topik' => 'UKT',
            'keluhan' => 'Selamat pagi, saya Alayna dari program studi Teknologi Informasi, 
             ingin bertanya mengenai keringanan UKT dan bantuan beasiswa. Untuk informasi lebih lanjut saya harus menghubungi bagian apa?'
        ],
        [
            'id' => 2,
            'student_user_id' => 41,
            'student_program_id' => 1,
            'topik' => 'Akademik',
            'keluhan' => 'Selamat pagi, saya Jarvis dari program studi Teknologi Informasi, 
             ingin bertanya mengenai kelas saya yang bentrok dengan mata kuliah lain. Untuk informasi lebih lanjut saya harus menghubungi bagian apa?'
        ]
            
        ]);

        

    }
}