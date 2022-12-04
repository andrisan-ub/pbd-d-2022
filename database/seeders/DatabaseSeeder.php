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
        DB::table('presensi')->insert([
            `ID_Presensi`=>1,2,3,4,
            `Nama_Mahasiswa`=>'Ulla Hubbard','Josephine Peterseri','Rowan Harrington', 'Lani Vang',
            `NIM`=>'2151','2152','2153','2154',
            `ID_Class`=>1,1,1,1,
            `Class`=>'A - PBD','B - PBD','C - PBD','D - PBD',
            `Waktu_Kehadiran`=>NOW(),NOW(),NOW(),NOW(),
            `Hadir`=>14,13,11,7,
            `Alpha`=>0,1,1,3,
            `Izin`=>0,0,1,1,
            `Sakit`=>0,0,1,3,
            `Total_Pertemuan`=>14,14,14,14,
            `Presentase`=>100,93,79,50
        ]);
    }
}
