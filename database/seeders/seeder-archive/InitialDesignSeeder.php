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
            'id' => 001,
            'name' => 'Andi Setia Budi',
            'email' => 'andi@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'A1234567',
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 002,
            'name' => 'Ahmad Satrio',
            'email' => 'ahmad@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'AA123456',
            //'remember_token' => ,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 003,
            'name' => 'Budi Santoso',
            'email' => 'budi@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'BB123456' ,
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 004,
            'name' => 'Bella Dermawan',
            'email' => 'bella@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'B1234567',
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 005,
            'name' => 'Cindy Cecillia',
            'email' => 'cindy@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'C1234567',
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 006,
            'name' => 'Ciko Jericho',
            'email' => 'ciko@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'CC123456' ,
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 007,
            'name' => 'Dito Haryanto',
            'email' => 'dito@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'D1234567',
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 008,
            'name' => 'Diana Andini Siswanti',
            'email' => 'diana@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'DD123456',
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 009,
            'name' => 'Eko Prabudi',
            'email' => 'eko@student.ub.ac.id',
            //'email_verified_at' =>,
            'password' => 'E1234567' ,
            //'remember_token' =>,
            //'created_at' => ,
            //'updated_at' =>,
        ]);
        DB::table('users')->insert([
            'id' => 010,
            'name' => 'Elang Guritno',
            'email' => 'elang@student.ub.ac.id',
            //'email_verified_at' =>,	
            'password' => 'EE123456',
            //'remember_token' => ,	
            //'created_at' => , 		
            //'updated_at' =>,		
        ]);
        
         DB::table('student')->insert([
            'id' => 001,
            'student id' => 215150701111031
        ]);

        DB::table('student')->insert([
            'id' => 002,
            'student id' => 215150700111043
        ]);

        DB::table('student')->insert([
            'id' => 003,
            'student id' => 215150701111032
        ]);

        DB::table('student')->insert([
            'id' => 004,
            'student id' => 215150701111033
        ]);

        DB::table('student')->insert([
            'id' => 005,
            'student id' => 215150701111034
        ]);

        DB::table('student')->insert([
            'id' => 006,
            'student id' => 215150701111035
        ]);

        DB::table('student')->insert([
            'id' => 007,
            'student id' => 215150701111036
        ]);

        DB::table('student')->insert([
            'id' => 008,
            'student id' => 215150701111037
        ]);

        DB::table('student')->insert([
            'id' => 009,
            'student id' => 215150701111038
        ]);

        DB::table('student')->insert([
            'id' => 010,
            'student id' => 215150701111039
        ]);
    }
}
