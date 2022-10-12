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
        // procedure create - Deswita Marsya Nadia - 215150701111001
        // menambahkan row pada tabel lesson_learning_outcomes
        $create_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_LLO`;
        CREATE PROCEDURE `kelompok3_create_LLO` (
	
            in_id bigint (20),
            in_clo_id bigint (20),
            in_position int (11),
            in_description text
            
        )
        BEGIN
        
            insert into lesson_learning_outcomes
            values(in_id, in_clo_id, in_position, in_description);
        
        
        END;";
      
        \DB::unprepared($create_procedure);

        // procedure update - Deswita Marsya Nadia - 215150701111001
        // melakukan update baris pada table lesson_learning_outocomes berdasarkan id
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_update_LLO`;
        CREATE PROCEDURE `kelompok3_update_LLO` (

            IN p_id bigint (20),
            IN up_clo_id bigint (20),
            IN up_position int (11),
            IN up_description text
        
        )
        BEGIN
            
            update lesson_learning_outcomes set clo_id = up_clo_id, 
            position = up_position, 
            description = up_description
            where id = p_id;

            
        
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
        Schema::dropIfExists('llo_stored_procedure');
    }
};
