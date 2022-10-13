<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // UPDATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Update untuk mengubah data pada tabel syllabus berdasarkan id
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok5_update_syllabus`;
        CREATE PROCEDURE `kelompok5_update_syllabus` (

            IN p_id bigint(20),
            IN up_course_id bigint(20),
            IN up_title varchar(255),
            IN up_author text,
            IN up_head_of_study_program varchar(512)

        )
        BEGIN

        UPDATE syllabus SET course_id = up_course_id, title = up_title, author = up_author, head_of_study_program = up_head_of_study_program
        WHERE id = p_id;

        END;";

        DB::unprepared($procedure_update);

        // UPDATE PROCEDURE - Rama Adhitya Widodo Putra - 215150700111052
        // Procedure untuk update data pada tabel department berdasarkan id dan faculty_id
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok5_update_department`;
        CREATE PROCEDURE `kelompok5_update_department` (
            IN d_id bigint(20),
            IN d_faculty_id bigint(20),
            IN d_name varchar(255)          
        )
        BEGIN
            UPDATE department 
            SET name = d_name
            WHERE id = d_id AND faculty_id = d_faculty_id;
        END;";

        DB::unprepared($procedure_update);

        // UPDATE PROCEDURE - Ardhi Wahyu Hidayat - 215150707111038
        // Procedure untuk update data pada tabel faculty berdasarkan id
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok_5_update_faculty`;
            CREATE PROCEDURE `kelompok_5_update_faculty` (
                IN new_id int, 
                IN new_name varchar(255))
            BEGIN
            UPDATE faculty SET name = new_name WHERE id = new_id;
            END;";
  
        DB::unprepared($procedure_update);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_s_p');
    }
};
