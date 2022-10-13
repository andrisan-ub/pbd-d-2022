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
        //READ PROCEDURE - Alvianta Dwi Putra - 215150700111053
        //read untuk memunculkan identitas student. yaitu id user, NIM, Nama user
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok_5_read_student_id`;
        CREATE PROCEDURE `kelompok_5_read_student_id`()
        BEGIN
            SELECT us.id, st.student_id_number,us.name
            FROM users us
            right JOIN student_info st ON st.id=us.id;
        END;";
            
        DB::unprepared($procedure_create);


        //READ PROCEDURE - Alifa Nurfika - 215150700111044
        $procedure_read = "DROP PROCEDURE IF EXISTS `kelompok_5_read_course_id`;
        CREATE PROCEDURE `kelompok_5_read_course_id`()
        BEGIN
            SELECT study_program.id, course.id, course.name
            FROM study_program
            right JOIN course ON course.id=study_program.id;
        END;";
            
        DB::unprepared($procedure_read);

        //READ PROCEDURE - Alifa Nurfika - 215150700111044
        $procedure_read = "DROP PROCEDURE IF EXISTS `kelompok_5_read_grading_plan_id`;
        CREATE PROCEDURE `kelompok_5_read_grading_plan_id`()
        BEGIN
            SELECT assignment_plan_task.id, grading_plan.id, assignment_plan_task.description
            FROM assignment_plan_task
            right JOIN grading_plan ON grading_plan.id=assignment_plan_task.id;
        END;";
            
        DB::unprepared($procedure_read);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('read_s_p');
    }
};
