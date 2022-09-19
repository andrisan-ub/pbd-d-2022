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
         DB::table('Dosen')->insert([
            'Nama' => 'Andri Santoso',
            'NIP' => '21515070000001'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Fajar Pradana',
            'NIP' => '21515070000002'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Alfi Nur Rusydi',
            'NIP' => '21515070000003'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Bayu Rahayudi',
            'NIP' => '21515070000004'
        ]);

        DB::table('Dosen')->insert([
            
            'Nama' => 'Aryo Pinandito',
            'NIP' => '21515070000005'
        ]);
        

        DB::table('Prodi') -> insert([
            'ID_Prodi' => '1',
            'Nama_Prodi' => 'Teknologi Informasi'
        ]);
        
        DB::table('Prodi') -> insert([
            'ID_Prodi' => '2',
            'Nama_Prodi' => 'Sistem Informasi'
        ]);

        DB::table('Prodi') -> insert([
            'ID_Prodi' => '3',
            'Nama_Prodi' => 'Teknik Informatika'
        ]);

        DB::table('Prodi') -> insert([
            'ID_Prodi' => '4',
            'Nama_Prodi' => 'Teknik Komputer'
        ]);

        DB::table('Prodi') -> insert([
            'ID_Prodi' => '5',
            'Nama_Prodi' => 'Pendidikan Teknologi informasi'
        ]);


        DB::table('CPL') -> insert([
            'ID_CPL' => 'IT-ILO-02',
            'Desc' => 'Mampu merancang dan mengimplementasikan solusi teknologi informasi terintegrasi yang diperlukan untuk mewujudkan sistem yang terpadu secara efektif pada suatu organisasi'
        ]);

        DB::table('CPL') -> insert([
            'ID_CPL' => 'IT-ILO-09',
            'Desc' => 'Lulusan memiliki kemampuan untuk bersikap ilmiah, bekerja secara kolaboratif, memiliki sikap profesionalisme, serta mampu beradaptasi dengan baik di dalam situasi kerja kelompok maupun individu'
        ]);


        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-01.a',
            'Desc_2' => 'Mahasiswa secara individu membuat sebuah deskripsi sederhana tentang konsep pemrograman basis data dalam pengembangan aplikasi.'
        ]);

        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-01.b',
            'Desc_2' => 'Mahasiswa diminta membentuk kelompok dan berdiskusi terkait rencana projek akhir yang akan dikerjakan....'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-02.a',
            'Desc_2' => 'Mahasiswa secara individu untuk membuat deskripsi sederhana tentang konsep dasar stored procedure.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-02.b',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan SQL dalam stored procedure.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-02.c',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan SQL dalam logika pemrograman conditional statement.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-02.d',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan SQL dalam logika pemrograman looping.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-02.e',
            'Desc_2' => 'Masing-masing kelompok projek diminta untuk menerapkan stored procedure yang membantu proses pengolahan data yang nanti digunakan dalam fitur aplikasi....'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-03.a',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan function.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-03.b',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan cursor.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-03.c',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan trigger.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-04.a',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan dynamic SQL untuk proses CRUD.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-04.b',
            'Desc_2' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan dynamic SQL untuk proses searching.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-04.c',
            'Desc_2' => 'Mahasiswa mengintegrasikan dynamic SQL yang dibuat pada tugas pertama diatas kedalam aplikasi web.'
        ]);
        DB::table('SubTugas_LK') -> insert([
            'ID_Sub_LK' => 'LK-04.d',
            'Desc_2' => 'Masing-masing kelompok projek diminta untuk menyelesaikan final projeknya yang secara ilmiah...'
        ]);
    }
}
