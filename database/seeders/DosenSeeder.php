<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([

            [
            'NIP' => 12345,
            'Nama_Dosen' => 'Agus Wahidin',
            'NIDN' => '54321',
            ],

            [
                'NIP' => 12345,
                'Nama_Dosen' => 'Siti MUstikasari',
                'NIDN' => '132435',
            ],

            [
                'NIP' => 12345,
                'Nama_Dosen' => 'Sri Susanti',
                'NIDN' => '243546',
            ],

        ]);
    }
}
