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
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_create_faculties`;
        CREATE PROCEDURE `kelompok2_create_faculties` (
 
            new_id bigint (20),
            new_name bigint (45)
            
        )
        BEGIN
            UPDATE kelompok2_create_faculties SET id = new_id WHERE id = new_id;
            UPDATE kelompok2_create_faculties SET name = new_name WHERE id = new_id;
        END;";
      
        DB::unprepared($update_procedure);

        // procedure read - Putri Daliana Salsabilla Rais - 215150700111043
        $read_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_create_view_faculty_criterias`;
        CREATE PROCEDURE `kelompok2_create_view_faculty_criterias`()
        BEGIN
            SELECT fc.id, fc.description, c.max_point 
            FROM faculty fc 
            JOIN criterias c 
            ON c.fc_id = fc.id;
        
        END;";

        DB::unprepared($read_procedure);
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
