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
        //condition by SHAFA AF - 215150700111057
        $condition_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_condition_deadline`;
        CREATE PROCEDURE `kelompok3_condition_deadline`()
        BEGIN
        DECLARE note VARCHAR(20);
            SELECT users.name, assignments.assigned_date, assignments.due_date;
        IF (assignments.assigned_date <= assignment.due_date) THEN
	        SET note = 'early';
        ELSE
	        SET note = 'late';
        END IF;
            SELECT note;
        END;";

        DB::unprepared($condition_procedure); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condition_deadline');
    }
};
