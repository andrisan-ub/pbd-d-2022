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
                id, student_user_id, assigment_id, assigment_plan_task_id, criterion_level_id, created_at, updated_at)
            VALUES(
                id_std_grade, std_user_id, asg_id, asg_plan_task_id, criterion_lvl_id, new_created_at int, updated_at int);
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

        //IF ELSE student grade mark - Ahmad Fauzi - 215150700111037
        $ifelse_procedure = "DROP PROCEDURE IF EXISTS `get_student_grade_conditions`;
        CREATE PROCEDURE `get_student_grade_conditions` (IN student_id int)

        BEGIN
        DECLARE grade int;
        DECLARE mark Varchar(25);
        grade = SELECT point FROM criterion_level 
            WHERE id.criterion_level = criterion_level_id.student_grade
            AND _id = student_grade.id;

            IF grade < 60 THEN
            SET grade = 'TIDAK LULUS';

            ELSE
            SET grade = 'LULUS';
            END IF;
            
        SELECT id, updated_at FROM student grade
        INNER JOIN name ON users.id = student_grade.student_user_id
        INNER JOIN code ON assignment_plan_task.id = student_grade.assignment_plan_task_id
        INNER JOIN point ON criterion_level.id = student_grade.criterion_level_id
        INNER JOIN mark
        WHERE student_user_id = student_id;

        END;

        ";
  
        \DB::unprepared($ifelse_procedure);

        //loop get certain student grade - Ahmad Fauzi - 215150700111037
        $loop_procedure = "DROP PROCEDURE IF EXISTS `get_student_grade_loop`;
        CREATE PROCEDURE `get_student_grade_loop` (IN student_id int)

        BEGIN
        DECLARE i INT;
        DECLARE max INT;
        SET i = 0;
        SET max = COUNT(id) FROM student_grade;
                
        ulang: : LOOP
            IF i > max THEN
                LEAVE ulang;
            END IF;

            SET i = i + 1;
            
            SELECT id, updated_at FROM student grade
            INNER JOIN name ON users.id = student_grade.student_user_id
            INNER JOIN code ON assignment_plan_task.id = student_grade.assignment_plan_task_id
            INNER JOIN point ON criterion_level.id = student_grade.criterion_level_id
            WHERE student_user_id = student_id;
        END LOOP;
            
        END;

        ";
  
        \DB::unprepared($loop_procedure);
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
