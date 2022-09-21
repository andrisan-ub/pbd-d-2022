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

        DB::table('intended_learning_outcome')->insert([
            'ID_ILO' => '000111',
            'POSITION' => '02',
            'DESCRIPTION' => 'Mampu merancang dan mengimplementasikan solusi teknologi infromasi terintegrasi yang diperlukan untuk mewujudkan sistem yang terpadu secara efektif pada suatu organisasi',
            'SYLLABUS_ID_SYLLABUS' => '',
        ]);


        DB::table('intended_learning_outcome')->insert([
            'ID_ILO' => '000112',
            'POSITION' => '09',
            'DESCRIPTION' => 'Lulusan memiliki kemampuan untuk bersikap ilmiah, bekerja secara kolaboratif, memiliki sikap profesionalisme, serta mampu beradaptasi dengan baik di dalam situasi kerja kelompok maupun individu',
            'SYLLABUS_ID_SYLLABUS' => '',
        ]);
    }
}
