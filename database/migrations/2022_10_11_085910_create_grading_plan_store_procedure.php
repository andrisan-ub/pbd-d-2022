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
        //Membuat read procedure - Diajeng Kinasih Q - 215150700111022
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_grading_plan_by_id`;
        CREATE PROCEDURE `get_grading_plan_by_id` (
            IN id_grlan int
        )

        BEGIN 
        SELECT * FROM grading_plan
        WHERE id = id_grlan;
        END;

        ";
            DB::unprepared($get_procedure);

        // Membuat create procedure - Diajeng Kinasih Q - 215150700111022
        $create_procedure = "DROP PROCEDURE IF EXISTS `create_grading_plan_by_id`;
            CREATE PROCEDURE `create_grading_plan_by_id` (
                IN id_grlan int, 
                IN new_learning_plan_id int,
                IN new_assignment_plan_task_id int,  
                new_create_at datetime,
                new_update_at datetime
            )

            BEGIN 
            INSERT INTO grading_plan(id, learning_plan_id, assignment_plan_task_id)
            VALUES(id_grlan, new_learning_plan_id, new_assignment_plan_task_id);
            END;

    
            ";
            DB::unprepared($create_procedure);

        //
        $update_procedure = "DROP PROCEDURE IF EXISTS `update_grading_plan_by_id`;
                CREATE PROCEDURE `update_grading_plan_by_id` (
                    IN id_grlan int, 
                    IN new_learning_plan_id int
                )

                BEGIN 
                UPDATE grading_plan SET learning_plan_id = new_learning_plan_id
                WHERE id = id_grlan;
                END;

        
                ";
            DB::unprepared($update_procedure);

        //    
        $delete_procedure = "DROP PROCEDURE IF EXISTS `delete_learning_plan_id_by_id`;
                CREATE PROCEDURE `delete_learning_plan_id_by_id` (
                    IN id_grlan int
                )

                BEGIN 
                DELETE FROM grading_plan
                WHERE id = id_grlan;
                END;

        
                ";
            DB::unprepared($delete_procedure);

        //Membuat if procedure - Erio Andrian Arriom - 215150701111022
        $if_procedure = "DROP PROCEDURE IF EXISTS `if_grading_plan`;
                CREATE PROCEDURE `if_grading_plan` (IN input int)

                BEGIN
                IF input < 10 THEN
        
                SELECT * FROM grading_plan
                WHERE id = input;
                END IF;
                END;
                ";
            DB::unprepared($if_procedure);

        // Membuat loop procedure - Ridha Annisa Sabilla - 215150701111016
        $loop_procedure = "DROP PROCEDURE IF EXISTS `loop_grading_plan`;
            CREATE PROCEDURE `loop_grading_plan`() 

            BEGIN
            declare i int;
            set i = 1; 
            WHILE i <= 10 DO 
            SELECT * FROM grading_plan
            WHERE id = i;
            set i = i + 2;
            END WHILE;
            END;

            ";
            DB::unprepared($loop_procedure);


        }
    


    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('grading_plan');
    }
};
