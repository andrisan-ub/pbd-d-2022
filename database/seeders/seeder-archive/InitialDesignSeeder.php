<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialDesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->insert([
            'name' => 'Fakultas Ilmu Komputer'
        ]);
        
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Andi Setia Budi',
            'email' => 'andi@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'A1234567',
            'remember_token' => 'Ausdsbs',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Ahmad Satrio',
            'email' => 'ahmad@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'AA123456',
            'remember_token' => 'Ausdsds',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Budi Santoso',
            'email' => 'budi@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'BB123456' ,
            'remember_token' =>'Ausdsba',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Bella Dermawan',
            'email' => 'bella@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'B1234567',
            'remember_token' =>'Ausdsbb',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Cindy Cecillia',
            'email' => 'cindy@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'C1234567',
            'remember_token' =>'Ausdsbc',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Ciko Jericho',
            'email' => 'ciko@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'CC123456' ,
            'remember_token' =>'Ausdsbd',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Dito Haryanto',
            'email' => 'dito@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'D1234567',
            'remember_token' =>'Ausdsbe',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Diana Andini Siswanti',
            'email' => 'diana@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'DD123456',
            'remember_token' =>'Ausdsbg',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Eko Prabudi',
            'email' => 'eko@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',
            'password' => 'E1234567' ,
            'remember_token' =>'Ausdsbh',
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',
        ]);
        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Elang Guritno',
            'email' => 'elang@student.ub.ac.id',
            'email_verified_at' => '2022-07-03 07:18:30',	
            'password' => 'EE123456',
            'remember_token' =>'Ausdsbi',	
            'created_at' => '2022-07-03 07:18:30',
            'updated_at' =>'2022-07-03 07:18:30',	
        ]);
        
         DB::table('student')->insert([
            'id' => 1,
            'student id' => 215150701111031
        ]);

        DB::table('student')->insert([
            'id' => 2,
            'student id' => 215150700111043
        ]);

        DB::table('student')->insert([
            'id' => 3,
            'student id' => 215150701111032
        ]);

        DB::table('student')->insert([
            'id' => 4,
            'student id' => 215150701111033
        ]);

        DB::table('student')->insert([
            'id' => 5,
            'student id' => 215150701111034
        ]);

        DB::table('student')->insert([
            'id' => 6,
            'student id' => 215150701111035
        ]);

        DB::table('student')->insert([
            'id' => 7,
            'student id' => 215150701111036
        ]);

        DB::table('student')->insert([
            'id' => 8,
            'student id' => 215150701111037
        ]);

        DB::table('student')->insert([
            'id' => 9,
            'student id' => 215150701111038
        ]);

        DB::table('student')->insert([
            'id' => 10,
            'student id' => 215150701111039
        ]);
    }
}
