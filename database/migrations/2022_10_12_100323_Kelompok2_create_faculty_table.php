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
        // Procedure create - Putri Daliana - 215150700111043
        $procedure_create_new= "DROP PROCEDURE IF EXISTS 'create_clo';
        CREATE PROCEDURE 'kelompok2_create_faculty'(IN 'id' BIGINT(20) UNSIGNED, IN 'name' VARCHAR(45))
        BEGIN 
        INSERT INTO faculty VALUES (IN_id, IN_name);
        END;";

        DB::unprepared($procedure_create_new);
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
