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

        DB::table('presensi')->insert([
            'id'=>1,
            'Nama_Mahasiswa'=>'Vivianne Sauer',
            'NIM'=>2,
            'ID_Class'=>1,
            'Class'=>'A - PBD',
            'Waktu_Kehadiran'=>NOW(),
            // 'Hadir'=>14,
            // 'Alpha'=>0,
            // 'Izin'=>0,
            // 'Sakit'=>0,
            'Total_Pertemuan'=>14,
        ]);

        DB::table('presensi')->insert([
            'id'=>2,
            'Nama_Mahasiswa'=>'Eli Schamberger',
            'NIM'=>3,
            'ID_Class'=>2,
            'Class'=>'B - PBD',
            'Waktu_Kehadiran'=>NOW(),
            // 'Hadir'=>13,
            // 'Alpha'=>1,
            // 'Izin'=>0,
            // 'Sakit'=>0,
            'Total_Pertemuan'=>14,
        ]);

        // DB::table('presensi')->insert([
        //     `ID_Presensi`=>3,
        //     `Nama_Mahasiswa`=>'Rowan Harrington',
        //     `NIM`=>'2153',
        //     `ID_Class`=>1,
        //     `Class`=>'C - PBD',
        //     `Waktu_Kehadiran`=>NOW(),
        //     `Hadir`=>11,
        //     `Alpha`=>1,
        //     `Izin`=>1,
        //     `Sakit`=>1,
        //     `Total_Pertemuan`=>14,
        //     `Presentase`=>79
        // ]);

        // DB::table('presensi')->insert([
        //     `ID_Presensi`=>4,
        //     `Nama_Mahasiswa`=>'Lani Vang',
        //     `NIM`=>'2154',
        //     `ID_Class`=>1,
        //     `Class`=>'D - PBD',
        //     `Waktu_Kehadiran`=>NOW(),
        //     `Hadir`=>7,
        //     `Alpha`=>3,
        //     `Izin`=>1,
        //     `Sakit`=>3,
        //     `Total_Pertemuan`=>14,
        //     `Presentase`=>50
        // ]);
    }
}