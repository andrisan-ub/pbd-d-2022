<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class course_seeder extends Seeder
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

        DB::table('course')->insert([
            'nama'=> 'Pemrograman Basis Data',
            'code'=> '36969R',
            'course_credit'=> 3,
            'lab_credit'=> 1,
            'type'=> 'mandatory',
            'short_description'=> 'Pada mata kuliah ini, peserta mata kuliah akan dibekali pemahaman tingkat lanjut dalam basis data
            serta menguasai kemampuan dalam mengembangkan objek basis data Stored Procedure, Function,
            dan Trigger melalui susuan perintah dalam bentuk pemrograman basis data. Mahasiswa diharapkan
            dapat mengaplikasikan objek basis data tersebut untuk meningkatkan respon peladen basis data,
            kinerja yang lebih baik, dan tata kelola basis data yang lebih efektif',
            'minimal_requirement'=> 'Sistem Basis Data D',
            'study_material_summary'=>'Mampu menjelaskan konsep dalam pemrograman basis data dan mengkaji objek basis data
            yang tepat untuk mendukung kinerja sistem informasi yang lebih baik',
            'learning_media'=> 'eling'
        ]);
    }
}
