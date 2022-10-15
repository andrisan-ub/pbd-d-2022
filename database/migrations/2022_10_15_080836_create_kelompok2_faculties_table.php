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
            UPDATE kelompok2_create_faculties SET id = new_id WHERE id = new_id;
            UPDATE kelompok2_create_faculties SET name = new_name WHERE id = new_id;
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

       $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok2_condition_deadline`;
        CREATE PROCEDURE `kelompok2_condition_deadline`()

        BEGIN
        DECLARE keterangan VARCHAR(20);
        SELECT users.name, assignments_assigned_date, assignments_due_date;
        if (assignments.assigned_date <= assignments.due_date) THEN
        SET keterangan = 'on time';
        ELSE 
        SET keterangan = 'terlambat';
        END IF;
            SELECT keterangan;
        END;";

        DB::unprepared($procedure_condition); 
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
};
