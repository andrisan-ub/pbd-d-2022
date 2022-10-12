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
      $procedure_create_new = "DROP PROCEDURE IF EXISTS 'create_clo';
      CREATE PROCEDURE 'kelompok3_create_clo'(IN 'id' BIGINT(20) UNSIGNED, IN 'ilo_id' BIGINT(20) UNSIGNED, IN 'position' INT(11), IN 'description' TEXT)
      BEGIN
      INSERT INTO course_learning_outcome VALUES(IN_id, IN_ilo_id, IN_position, IN_description);
      END;";
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clo_stored_procedure');
    }
};
