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
    

       //procedure update - Aulia S.A - 215150701111045
       $procedure_update_by_id = "DROP PROCEDURE IF EXISTS 'update_clo';
       CREATE PROCEDURE 'update_clo' (IN 'new_id' int, IN new_ilo_id BIGINT(20), IN new_position INT(11), IN new_description TEXT)
       BEGIN
       UPDATE course_learning_outcome 
       SET id = new_id, SET ilo = new_ilo_id, SET position = new_position, SET description = new_description
       WHERE id = new_id;
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
