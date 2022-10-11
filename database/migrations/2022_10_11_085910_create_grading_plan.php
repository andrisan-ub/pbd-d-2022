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
