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
        DB::table('jurusan')->insert([
            'ID_Jurusan' => '1',
            'Nama_Jurusan' => 'Teknik Informatika',
        ]);

        DB::table('jurusan')->insert([
            'ID_Jurusan' => '2',
            'Nama_Jurusan' => 'Sistem Informasi',
        ]);


        DB::table('dosen')->insert([
            'NIP' => '12344',
            'Nama_Dosen' => 'Agus Budianto',
            'NIDN' => '44321',
        ]);

        DB::table('dosen')->insert([
            'NIP' => '12345',
            'Nama_Dosen' => 'Siti Agustina',
            'NIDN' => '54321',
        ]);


        DB::table('prodi')->insert([
            'ID_Prodi' => '11',
            'Nama_Prodi' => 'Teknik Informatika',
            'Jenjang' => 'S1',
            'Jurusan_ID_Jurusan' => '1',
        ]);


        DB::table('prodi')->insert([
            'ID_Prodi' => '22',
            'Nama_Prodi' => 'Sistem Informasi',
            'Jenjang' => 'S1',
            'Jurusan_ID_Jurusan' => '2',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150701111001',
            'Nama_mahasiswa' => 'Dianty Annisa',
            'Dosen_NIP' =>'12345',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => '215150701111002',
            'Nama_mahasiswa' => 'Rhama Renaldi Jakfar',
            'Dosen_NIP' =>'12344',
        ]);

        DB::table('mata_kuliah')->insert([
            'ID_MK' => '0011',
            'Nama_MK' => 'Pengembangan Aplikasi Web',
            'Kode_MK' => '001111',
            'Jumlah_SKS' => '3',
            'Thn_MK' => '2022',
            'IsWajib' => true,
            'Mahasiswa_NIM' => '215150701111001',
            'Dosen_NIP' =>'12345',
            'Prodi_ID_Prodi' => '11',
            'Prodi_Jurusan_ID_Jurusan' => '1',
        ]);

        DB::table('mata_kuliah')->insert([
            'ID_MK' => '0022',
            'Nama_MK' => 'Internet of Things',
            'Kode_MK' => '002222',
            'Jumlah_SKS' => '4',
            'Thn_MK' => '2022',
            'IsWajib' => true,
            'Mahasiswa_NIM' => '215150701111002',
            'Dosen_NIP' =>'12344',
            'Prodi_ID_Prodi' => '22',
            'Prodi_Jurusan_ID_Jurusan' => '2',
        ]);

        DB::table('cpl')->insert([
            'ID_CPL' => '02',
            'Deskripsi_CPL' => 'Mampu merancang dan mengimplementasikan solusi teknologi informasi yang diperlukan untuk mewujudkan sistem yang terpadu secara efektif pada suatu organisasi',
            'Mata_Kuliah_ID_MK' =>'0011',
        ]);

        DB::table('cpl')->insert([
            'ID_CPL' => '09',
            'Deskripsi_CPL' => 'Lulusan memiliki kemampuan untuk bersikap ilmiah, bekerja secara kolaboratif, memiliki sikap profesionalisme, serta mampu beradaptasi dengan baik di dalam situasi kerja kelompok maupun individu',
            'Mata_Kuliah_ID_MK' =>'0011',
        ]);

        DB::table('cpmk')->insert([
            'ID_CPMK' => '111',
            'CPL_ID_CPL' => '02',
            'Deskripsi_CPMK' => 'Mampu memahami konsep pemrograman basis data untuk menunjang integrasi data dalam pengembangan aplikasi',
            'CPL_MATA_KULIAH_ID_MK' =>'0011',
        ]);

        DB::table('cpmk')->insert([
            'ID_CPMK' => '222',
            'Deskripsi_CPMK' => 'Mampu merancang dan mengimplementasikan logika pemrograman dalam stored procedure, store function, cursor dan trigger',
            'CPL_ID_CPL' => '09',
            'CPL_MATA_KULIAH_ID_MK' =>'0011',
        ]);

        DB::table('sub_cpmk')->insert([
            'ID_sub_cpmk' => '0101',
            'Deskripsi_Sub_CPMK' => 'Mampu Memahami Konsep Dasar Pemrograman Database dan Struktur STored Procedure',
            'CPMK_ID_CPMK' => '111',
            'CPMK_CPL_ID_CPL' => '02',
            'CPMK_CPL_MATA_KULIAH_ID_MK' => '0011',
            ]);
            
        DB::table('sub_cpmk')->insert([
            'ID_sub_cpmk' => '0102',
            'Deskripsi_Sub_CPMK' => 'Mampu Mengimplementasikan logika pemrograman dalam stored procedure',
            'CPMK_ID_CPMK' => '222',
            'CPMK_CPL_ID_CPL' => '09',
            'CPMK_CPL_MATA_KULIAH_ID_MK' => '0011',
            ]);

        DB::table('lembar_kerja')->insert([
            'ID_Lembar_Kerja' => '0808',
            'Sub_CPMK_ID_Sub_CPMK' => '0101',

            ]);
        
        DB::table('lembar_kerja')->insert([
            'ID_Lembar_Kerja' => '0909',
            'Sub_CPMK_ID_Sub_CPMK' => '0102',
    
            ]);
     

    }
}
