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
            in_id BIGINT,
            in_assignment_plan_id BIGINT,
            in_course_class_id BIGINT,
            in_assigned_date TIMESTAMP,
            in_due_date TIMESTAMP,
            in_note TEXT
            )
        BEGIN
        insert into assignment VALUES (in_id, in_assignment_plan_id, in_course_class_id, in_assigned_date, in_due_date, in_note);
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
        Schema::dropIfExists('kelompok2_assignment');
    }
};
