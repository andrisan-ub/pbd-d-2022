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
        $procedure_create_new= "DROP PROCEDURE IF EXISTS 'kelompok2_create_faculty';
        CREATE PROCEDURE 'kelompok2_create_faculty'(IN 'id' BIGINT(20) UNSIGNED, IN 'name' VARCHAR(45))
        BEGIN 
        INSERT INTO faculty VALUES (in_id, in_name);
        END;";

        DB::unprepared($procedure_create_new);
        // Procedure update - Diandra Charisa - 215150700111032
        $update_procedure = "DROP PROCEDURE IF EXISTS 'kelompok2_create_faculty';
        CREATE PROCEDURE 'kelompok2_create_faculty' (
 
            new_id bigint (20),
            new_name bigint (45)
            
        )
        BEGIN
            UPDATE kelompok2_create_faculty SET id = new_id WHERE id = new_id;
            UPDATE kelompok2_create_faculty SET name = new_name WHERE id = new_id;
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
        Schema::dropIfExists('faculty');
    }
};
