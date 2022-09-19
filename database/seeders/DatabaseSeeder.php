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

        DB::table('mahasiswa')->insert([
            'name' => 'Rafli Ardiansyah',
            'nim' => '215150701111030',
            'semester' => 3
        ]);

        DB::table('mahasiswa')->insert([
            'name' => 'Muchammad Saifurrijaal',
            'nim' => '215150701111006',
            'semester' => 3
        ]);

        DB::table('mahasiswa')->insert([
            'name' => 'Redo Meire',
            'nim' => '215150701111032',
            'semester' => 3
        ]);

        DB::table('dosen')->insert([
            'nama' => 'Muhammad Herman',
            'nidn' => '12345678'
        ]);

        DB::table('matakuliah')->insert([
            'id' => 1,
            'nama' => 'Pemrograman Basis Data',
            'sks' => 3
        ]);

        DB::table('dosenmatkul')->insert([
            'id' => 1,
            'nidn' => '12345678',
            'id_matkul' => 1
        ]);

        DB::table('mahasiswamatkul')->insert([
            'id' => 1,
            'nim' => '215150701111006',
            'id_matkul' => 1
        ]);

        DB::table('mahasiswamatkul')->insert([
            'id' => 2,
            'nim' => '215150701111032',
            'id_matkul' => 1
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK1'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK2'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK3'
        ]);

        DB::table('tipetugas')->insert([
            'nama' => 'LK4'
        ]);

        DB::table('cpl')->insert([
            'description' => 'IT-ILO-02: Mampu merancang dan menimplementasikan solusi teknologi informasi terintegrasi yang diperlukan untuk mewujudkan sistem yang terpadu secara efektif pada suatu organisasi'
        ]);

        DB::table('cpl')-> insert([
            'description' => 'IT-ILO-09: Lulusan memiliki kemampuan untuk bersikap ilmiah, bekerja secara kolaboratif, memiliki sikap profesionalisme, serta mampu beradaptasi dengan baik di dalam situasi kerja kelompok maupun individu'
        ]);

        DB::table('cpmk')->insert([
            'tipe_cpmk' => 'M1',
            'description' => 'Mampu memahami konsep pemrograman basis data untuk menunjang integrasi data dalam pengembangan aplikasi'
        ]);

        DB::table('cpmk')->insert([
            'tipe_cpmk' => 'M2',
            'description' => 'Mampu merancang dan mengimplementasikan logika pemrograman dalam stored procedure, store function, cursor, dan trigger'
        ]);

        DB::table('cpmk')->insert([
            'tipe_cpmk' => 'M3',
            'description' => 'Mampu mengintegrasikan pemrograman basis data dalam aplikasi'
        ]);

        DB::table('cpmk')->insert([
            'tipe_cpmk' => 'M4',
            'description' => 'Mampu menyampaikan hasil rancangan dan implementasi projek secara ilmiah'
        ]);

        DB::table('tipe_ujian')->insert([
            'nama' => 'UTS'
        ]);

        DB::table('tipe_ujian')->insert([
            'nama' => 'UAS'
        ]);
    }
}
