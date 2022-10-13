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
        // Procedure create - Fauzan Zakaria Hermansah - 215150700111023
        $procedure_create_new= "DROP PROCEDURE IF EXISTS `kelompok2_create_assignment`;
        CREATE PROCEDURE `kelompok2_create_assignment` (
            IN_id BIGINT(6), 
            IN_assignment_plan_id BIGINT(6), 
            IN_course_class_id BIGINT(6), 
            IN_assigned_date TIMESTAMP(20), 
            IN_due_date TIMESTAMP(20), 
            IN_note TEXT(255)
            )
        BEGIN
        INSERT INTO assignment VALUES (IN_id, IN_assignment_plan_id, IN_course_class_id, IN_assigned_date, IN_due_date, IN_note);
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
        Schema::dropIfExists('assignment');
    }
};
