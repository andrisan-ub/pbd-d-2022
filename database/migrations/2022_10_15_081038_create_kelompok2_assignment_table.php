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
        // Procedure read - Fauzan Zakaria Hermansah - 215150700111023
        $procedure_read_new= "DROP PROCEDURE IF EXISTS `kelompok2_create_view_assignments_assignment_plans`;
        CREATE PROCEDURE `kelompok2_create_view_assignments_assignment_plans` ()
        BEGIN
        SELECT a.id, a.note, ap.description 
            FROM assignments a
            JOIN assignment_plans ap 
            ON a.assignment_plan_id = a.id;
        END;";

        DB::unprepared($procedure_read_new);


        // Procedure create - Fauzan Zakaria Hermansah - 215150700111023
        
        $procedure_create_new= "DROP PROCEDURE IF EXISTS `kelompok2_create_assignment`;
        CREATE PROCEDURE `kelompok2_create_assignment` (
            in_id BIGINT,
            in_assignment_plan_id BIGINT,
            in_course_class_id BIGINT,
            in_assigned_date TIMESTAMP,
            in_due_date TIMESTAMP,
            in_note TEXT
            )
        BEGIN
        insert into assignments VALUES (in_id, in_assignment_plan_id, in_course_class_id, in_assigned_date, in_due_date, in_note);
        END;";

        DB::unprepared($procedure_create_new);
       
        
        // Procedure update - Jasmine Cecilia Putri Effendy - 215150701111041
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_update_assignment`;
        CREATE PROCEDURE `kelompok2_update_assignment` (
 
            in_id BIGINT,
            in_note TEXT            
        )
        BEGIN
            UPDATE kelompok2_create_assignment SET id = in_id WHERE id = in_id;
            UPDATE kelompok2_create_assignment SET note = in_note WHERE id = in_id;
        END;";
      
        DB::unprepared($update_procedure);

       //procedure delete - Jasmine Cecilia Putri Effendy - 215150701111041
       $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok2_delete_assignment`;
       CREATE PROCEDURE `kelompok2_delete_assignment` (IN in_id int)
       BEGIN
       DELETE FROM assignments WHERE id = in_id;
       END;";

       DB::unprepared($procedure_delete);

         // Procedure loop - Fauzan Zakaria Hermansah - 215150700111023

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok2_assignment');
    }
};