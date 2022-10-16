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
        // Procedure create - Putri Daliana - 215150700111043
        $create_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_create_faculties`;
        CREATE PROCEDURE `kelompok2_create_faculties` (

            in_id bigint (20),
            in_name varchar (45)
            
        )
        BEGIN
            insert into faculties VALUES (in_id, in_name);
        END;";
    
        DB::unprepared($create_procedure);
    
        // Procedure update - Diandra Charisa - 215150700111032
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_update_faculties`;
        CREATE PROCEDURE `kelompok2_update_faculties` (
 
            new_id bigint (20),
            new_name varchar (45)
            
        )
        BEGIN
            UPDATE faculties SET id = new_id WHERE id = new_id;
            UPDATE faculties SET name = new_name WHERE id = new_id;
        END;";
      
        DB::unprepared($update_procedure);
        //Procedure Delete - Diandra Charisa - 215150700111032
       $delete_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_delete_faculties`;
       CREATE PROCEDURE `kelompok2_delete_faculties` (
   
           new_id bigint (20),
           new_name varchar (45)
           
       )
       BEGIN
           DELETE FROM faculties WHERE id = new_id;
       END;";
     
       DB::unprepared($delete_procedure);

        //Procedure Condition - Diandra Charisa - 215150700111032 
        $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok2_status_deadline`;
         CREATE PROCEDURE `kelompok2_status_deadline`()
 
         BEGIN
         SELECT assignments.assigned_date, assignment_plans.description, 
         if(assignments.due_date is true, 'early', 'late') AS waktu_pengerjaan
         from assignments
         join  assignment_plans on assignments.id = assignments.assignment_plan_id;
      
       END;";

         DB::unprepared($procedure_condition); 

        // Procedure read - Putri Daliana Salsabilla Rais- 215150700111043
        $procedure_read_new= "DROP PROCEDURE IF EXISTS `kelompok2_create_view_faculties`;
        CREATE PROCEDURE `kelompok2_create_view_faculties` ()
        BEGIN
        SELECT f.id, f.name, d.id, d.name
            FROM faculties f
            JOIN departments d
            ON f.departments_id = f.id;
        END;";

        DB::unprepared($procedure_read_new);

        // LOOPING PROCEDURE - Putri Daliana Salsabilla Rais - 215150700111043
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok2_create_loop`;
            CREATE PROCEDURE `kelompok2_create_loop`(
                IN i INT,
                IN j INT
            )
            BEGIN
                REPEAT
                    SELECT lesson_learning_outcomes.id, criterias.description, criterias.max_point
                    FROM lesson_learning_outcomes, criterias
                    WHERE lesson_learning_outcomes.id = criterias.llo_id AND lesson_learning_outcomes.id= i;
                    SET i= i + 1;
                UNTIL i>= j
                END REPEAT;
            END;";

        DB::unprepared($procedure_loop);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok2_faculties');
    }

    // DB::unprepared($delete_procedure);
    
    
};
