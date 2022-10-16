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
        // procedure read - Tanziil Aziizil Ali - 215150707111028
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_student_grade_by_id`;
            CREATE PROCEDURE `get_student_grade_by_id` (IN id_std_grade int)

            BEGIN
            SELECT * FROM student_grade WHERE id = id_std_grade;
            END;

            ";
  
        \DB::unprepared($get_procedure);


        //create procedure - Tanziil Aziizil Ali - 215150707111028
        $create_procedure = "DROP PROCEDURE IF EXISTS `create_student_grade_by_id`;
            CREATE PROCEDURE `create_student_grade_by_id` (
                id_std_grade int,
                std_user_id int,
                asg_id int,
                asg_plan_task_id int,
                criterion_lvl_id int,
                new_created_at int,
                new_updated_at int )

            BEGIN
            INSERT INTO student_grade(
                id, student_user_id, assigment_id, assigment_plan_task_id, criterion_level_id, new_created_at, new_updated_at)
            VALUES(
                id_std_grade, std_user_id, asg_id, asg_plan_task_id, criterion_lvl_id, created_at int, updated_at int);
            END;
            
            ";


        \DB::unprepared($create_procedure);

        //update procedure - Ahmad Fauzi - 215150700111037
        $update_procedure = "DROP PROCEDURE IF EXISTS `update_student_grade_by_id`;
            CREATE PROCEDURE `update_student_grade_by_id` (
                IN id_std_grade int,
                IN new_created_at int,
                IN new_updated_at int),
            BEGIN
            UPDATE student_grade SET created_at = new_created_at WHERE id = id_std_grade;
            UPDATE student_grade SET updated_at = new_updated_at WHERE id = id_std_grade;
            END;";
  
        \DB::unprepared($update_procedure);

        
        //procedure delete -Ahmad Fauzi - 215150700111037
        $delete_procedure = "DROP PROCEDURE IF EXISTS `delete_student_grade_by_id`;
            CREATE PROCEDURE `delete_student_grade_by_id` (id_std_grade int)
            BEGIN
            DELETE FROM student_grade
            WHERE id = id_std_grade;
            END;
            
        ";
  
        \DB::unprepared($delete_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_grade_store_procedure');
    }
};
