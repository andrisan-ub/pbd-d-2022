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
        $procedure_create_new = "DROP PROCEDURE IF EXISTS 'kelompok2_create_faculty';
        CREATE PROCEDURE 'kelompok2_create_faculty' (
           in_id bigint(20),
            in_name varchar(45)

        BEGIN 
        INSERT INTO faculty VALUES (in_id, in_name);
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
