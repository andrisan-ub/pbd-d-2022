<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('assignment')->insert([
            'id' => '1',
            'llo_id' => '1',
            'objective' => 'Pemograman Basis Data',
            'title' => 'Konsep Pemograman Basis Data dan Rencana Projek Akhir Kelompok',
            'is_group_assigment' => true,
            'assignment_style' => 'Leason Learned Report dan Presentasi Kelompok',
            'description' => 'Mahasiswa mampu secara individu membuat sebuah deskripsi sederhana tentang konsep pemograman basis data dalam pengembangan aplikasi',
            'output_instruction' => 'LLR ditulis langsung dalam bentuk teks pada aplikasi Eling',
            'submission_instruction' => 'LLR dikerjakan dan dikumpulkan dalam pertemuan pertama',
            'deadline_instruction' => 'Upload ke LMS Kelas (Platform ELING)',
            'class_id' => '1',
            'created_at' => '280922',
            'updated_at' => '280922'
        ]);

        DB::table('assignment')->insert([
            'id' => '2',
            'llo_id' => '2',
            'objective' => 'Pemograman Basis Data',
            'title' => 'Logika Pemograman Basis Data dan Progress Projek Tengah Kelompok',
            'is_group_assigment' => true,
            'assignment_style' => 'Leason Learned Report dan Presentasi Kelompok',
            'description' => 'Mahasiswa mampu secara individu membuat sebuah deskripsi sederhana tentang konsep dasar stored procedure',
            'output_instruction' => 'LLR ditulis langsung dalam bentuk teks pada aplikasi Eling',
            'submission_instruction' => 'LLR dikerjakan dan dikumpulkan dalam pertemuan pertama',
            'deadline_instruction' => 'Upload ke LMS Kelas (Platform ELING)',
            'class_id' => '2',
            'created_at' => '280922',
            'updated_at' => '280922'
        ]);

        DB::table('assignment')->insert([
            'id' => '3',
            'llo_id' => '3',
            'objective' => 'Pemograman Basis Data',
            'title' => 'Cursor, Function, dan Trigger',
            'is_group_assigment' => true,
            'assignment_style' => 'Tugas',
            'description' => 'Mahasiswa diberikan studi kasus sederhana dalam menerapkan function, cursor, dan trigger',
            'output_instruction' => 'LLR ditulis langsung dalam bentuk teks pada aplikasi Eling',
            'submission_instruction' => 'LLR dikerjakan dan dikumpulkan dalam pertemuan pertama',
            'deadline_instruction' => 'Upload ke LMS Kelas (Platform ELING)',
            'class_id' => '3',
            'created_at' => '280922',
            'updated_at' => '280922'
        ]);

        DB::table('assignment')->insert([
            'id' => '4',
            'llo_id' => '4',
            'objective' => 'Pemograman Basis Data',
            'title' => 'Dynamic SQL dan smart codeigniter',
            'is_group_assigment' => true,
            'assignment_style' => 'Tugas dan presentasi kelompok',
            'description' => 'Mahasiswa diberikan studi kasus sederhana untuk menerapkan sistem dynamic SQL untuk proses CRUD, searching, dan mengitegrasikan kedalam aplikasi web serta masing-masing kelompok projek diminta untuk menyelesaikan final projeknya yang secara ilmiah dirulis dalam pelaporan dan dipresentasikan',
            'output_instruction' => 'LLR ditulis langsung dalam bentuk teks pada aplikasi Eling',
            'submission_instruction' => 'LLR dikerjakan dan dikumpulkan dalam pertemuan pertama',
            'deadline_instruction' => 'Upload ke LMS Kelas (Platform ELING)',
            'class_id' => '4',
            'created_at' => '280922',
            'updated_at' => '280922'
        ]);

    }
}
