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
       // Procedure create - Fairuz - 215150701111023
      $viewSyllabiClo_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_vieSyllabiClo`;
      CREATE PROCEDURE `kelompok3_viewSyllabiClo` 
      BEGIN
            SELECT s.title, clo.id, clo.description FROM course_learning_outcomes clo 
            JOIN intended_learning_outcomes ilo ON clo.ilo_id = ilo.id 
            JOIN syllabi s ON ilo.syllabus_id = s.id;
      END;";
    
      \DB::unprepared($viewSyllabiClo_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok3_create_view_syllabi_clo');
    }
};
