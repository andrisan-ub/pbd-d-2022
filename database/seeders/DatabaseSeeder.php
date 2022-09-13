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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    DB::table('dosen_pengampu')->insert([
        'NIP' => '197209191997021001',
        'Nama_Dosen' => 'Welly Purnomo, S.T., M.Kom.',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '197408052001121001',
        'Nama_Dosen' => 'Agus Wahyu Widodo',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '198309222012121003',
        'Nama_Dosen' => 'Issa Arwani',
    ]);

    DB::table('dosen_pengampu')->insert([
        'NIP' => '197209191997021002',
        'Nama_Dosen' => 'Andri Santoso',
    ]);

    DB::table('rps')->insert([
        'Kode_RPS' => '60001',
        'Bobot_SKS' => '3',
        'Semester' => '3',
        'Tanggal_Penyusunan' => '2021-11-05',
    ]);

    DB:: table('mata_kuliah')->insert([
        'Kode_MK' => '60002',
        'Jumlah_SKS' => '3',
        'Materi_Pembelajaran' => 'Konsep Pemrograman Basis Data Dalam DBMS',
        'Estimasi_Waktu' => '150',
        'Kurikulum' => '2020',
    ]);

    DB:: table('pengesahan')->insert([
        'Dosen_Pengampu' => 'Issa Arwani',
        'Status_2' => 'Terverifikasi',
        'KPS' => 'Widhy Hayuhardhika',
        'KKJFD' => 'Nanang Yudi Setiawan',
        'Mata_Kuliah_Kode_MK' => '60002',
        'RPS_Kode_RPS' => '60001',
    ]);

    DB::table('mahasiswa')->insert([
        'NIM' => '215150701111031',
        'Nama_Mahasiswa' => 'Firda Kusuma',
        'Semester_MHS' => '3',
    ]);
       
    DB::table('mahasiswa')->insert([
        'NIM' => '215150700111031',
        'Nama_Mahasiswa' => 'Putri Rais',
        'Semester_MHS' => '3',
    ]);
       
    DB::table('mahasiswa')->insert([
        'NIM' => '215150700111051',
        'Nama_Mahasiswa' => 'Clarita Yung',
        'Semester_MHS' => '3',
    ]);
    
    DB::table('cpl')->insert([
        'Kode_CPL' => '60003',
        'Keterangan_CPL' => 'Mampu merancang dan mengimplementasikan solusi teknologi informasi terintegrasi yang diperlukan untuk mewujdkan sistem yang terpadu secara efektif pada suatu organisasi',
        'Mata_Kuliah_Kode_MK' => '60002',
    ]);

    DB::table('cpl')->insert([
        'Kode_CPL' => '60006',
        'Keterangan_CPL' => 'Lulusan memiliki kemampuan untuk bersikap ilmiah, bekerja secara kolaboratif, memiliki sikap profesionalisme, serta mampu beradaptasi dengan baik di dalam situasi kerja kelompok maupun individu',
        'Mata_Kuliah_Kode_MK' => '60002',
    ]);

    DB::table('cpmk')->insert([
        'Kode_cpmk' => '60004',
        'Keterangan_cpmk' => 'Mampu memahami konsep pemrograman basis data untuk menunjang integrasi data dalam pengembangan aplikasi'
    ]);

    DB::table('penilaian')->insert([
        'Kode_Penilaian' => '6001',
        'Predikat' => 'B',
        'Nilai' => '75',
    ]);
    
    DB::table('penilaian')->insert([
        'Kode_Penilaian' => '6001',
        'Predikat' => 'B',
        'Nilai' => '76',
    ]);

    DB::table('penilaian')->insert([
        'Kode_Penilaian' => '6001',
        'Predikat' => 'A',
        'Nilai' => '89',
    ]);
    
    DB::table('sub_cpmk')->insert([
        'Kode_SUB_CPMK' => '6000',
        'Bobot_SUB_CPMK' => '100',
        'LK_1' => '80',
	    'LK_2' => '75',
	    'LK_3' => '92',
	    'LK_4' => '83',
	    'UTS' => '65',
	    'UAS' => '50',
    ]);

    DB::table('sub_cpmk')->insert([
        'Kode_SUB_CPMK' => '6000',
        'Bobot_SUB_CPMK' => '100',
        'LK_1' => '77',
	    'LK_2' => '92',
	    'LK_3' => '86',
	    'LK_4' => '53',
	    'UTS' => '88',
	    'UAS' => '60',
    ]);

    DB::table('sub_cpmk')->insert([
        'Kode_SUB_CPMK' => '6000',
        'Bobot_SUB_CPMK' => '100',
        'LK_1' => '92',
	    'LK_2' => '88',
	    'LK_3' => '79',
	    'LK_4' => '90',
	    'UTS' => '93',
	    'UAS' => '92',
    ]);
    }
}
