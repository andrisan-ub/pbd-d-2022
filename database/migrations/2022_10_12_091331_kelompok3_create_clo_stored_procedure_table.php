<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
      // Procedure create - Fairuz - 215150701111023
      $create_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_clo`;
        CREATE PROCEDURE `kelompok3_create_clo` (
	
            in_id bigint (20),
            in_ilo_id bigint (20),
            in_position int (11),
            in_description text
            
        )
        BEGIN
        
            insert into lesson_learning_outcomes
            values(in_id, in_ilo_id, in_position, in_description);
        
        
        END;";
      
        \DB::unprepared($create_procedure);
    

       //procedure update - Aulia S.A - 215150701111045
       $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_clo`;
        CREATE PROCEDURE `kelompok3_create_clo` (
	
            new_id bigint (20),
            new_ilo_id bigint (20),
            new_position int (11),
            new_description text
            
        )
        BEGIN
            UPDATE course_learning_outcomes SET id = new_id WHERE id = new_id;
            UPDATE course_learning_outcomes SET ilo_id = new_ilo_id WHERE id = new_id;
            UPDATE course_learning_outcomes SET position = new_position WHERE id = new_id;
            UPDATE course_learning_outcomes SET description = new_description WHERE id = new_id;
        END;";
      
        \DB::unprepared($update_procedure);

  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clo_stored_procedure');
    }
};
