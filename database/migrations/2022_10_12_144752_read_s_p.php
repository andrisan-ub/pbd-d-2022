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
        //READ PROCEDURE - Alvianta Dwi Putra - 215150700111053
        //read untuk memunculkan identitas student. yaitu id user, NIM, Nama user
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok_5_read_student_id`;
        CREATE PROCEDURE `kelompok_5_read_student_id`();
        BEGIN
            SELECT us.id, st.student_id_number,us.name
            FROM users us
            right JOIN student_info st ON st.id=us.id;
        END;";
            
        DB::unprepared($procedure_create);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('read_s_p');
    }
};
