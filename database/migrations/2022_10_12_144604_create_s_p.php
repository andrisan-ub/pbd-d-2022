<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Create untuk menambah baris data pada tabel syllabus
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_create_syllabus`;
        CREATE PROCEDURE `kelompok5_create_syllabus` (
            in_id bigint(20),
            in_course_id bigint(20),
            in_title varchar(255),
            in_author text,
            in_head_of_study_program varchar(512)
        )
        BEGIN
            INSERT INTO syllabus
            VALUES(in_id, in_course_id, in_title, in_author, in_head_of_study_program);
        END;";

        DB::unprepared($procedure_create);

        //CREATE PROCEDURE - Alvianta Dwi Putra - 215150700111053
        //create untuk insert baris data pada tabel assignment
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_create_assignment`;
        CREATE PROCEDURE `kelompok5_create_assignment` (
            IN id BIGINT(20),
            IN assignment_plan_id BIGINT,
            IN course_class_id BIGINT,
            IN assigned_date TIMESTAMP,
            IN due_date TIMESTAMP,
            IN note TEXT
            )
        BEGIN
            INSERT into assignment
            VALUES(id, assignment_plan_id, course_class_id, assigned_date, due_date, note);
        END;";
            
        DB::unprepared($procedure_create);

        //CREATE PROCEDURE - Ardhi Wahyu Hidayat - 215150707111038
        //create untuk insert baris data pada tabel faculty
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_create_faculty`;
        CREATE PROCEDURE `kelompok5_create_faculty` (
            in_id bigint(20),
            in_name varchar(255)
        )
        BEGIN
        INSERT INTO faculty
            values (in_id, in_name);
        END;";
        DB::unprepared($procedure_create);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_s_p');
    }
};
