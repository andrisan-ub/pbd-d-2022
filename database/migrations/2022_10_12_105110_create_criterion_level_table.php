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
        $procedure_create_new= "DROP PROCEDURE IF EXISTS 'create_clo';
        CREATE PROCEDURE 'kelompok2_create_criterion_level'(IN 'id' BIGINT UNSIGNED, IN 'criterion_id' BIGINT UNSIGNED, IN 'point' FLOAT, IN 'title' VARCHAR(1024), IN 'description'TEXT)
        BEGIN 
        INSERT INTO criterion_level VALUES (IN_id, IN_criterion_id, IN_point, IN_title, IN_description);
        END;";

        DB::unprepared($procedure_create_new);

        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_create_criterion_level`;
        CREATE PROCEDURE `kelompok2_create_criterion_level` (
	
            new_id bigint,
            new_criterion_id bigint,
            new_point float,
            new_title varchar(1024),
            new_description text

            
        )
        BEGIN
    
            UPDATE criterion_level SET id = new_id WHERE id = new_id;
            UPDATE criterion_level SET criterion_id = new_criterion_id WHERE id = new_id;
            UPDATE criterion_level SET point = new_point WHERE id = new_id;
            UPDATE criterion_level SET title = new_title WHERE id = new_id;
            UPDATE criterion_level SET description = new_description WHERE id = new_id;
        END;";

        DB::unprepared($update_procedure);
    }


     

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterion_level');
    }
};
