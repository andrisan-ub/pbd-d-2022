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
        $procedure_create_new = "DROP PROCEDURE IF EXISTS `create_ilo`;
       CREATE PROCEDURE `create_ilo` (IN id BIGINT(20) UNSIGNED, IN position INT, IN description TEXT, IN syllabus_id BIGINT(20) UNSIGNED)

       BEGIN
       INSERT INTO intended_learning_outcome VALUES(id, position, description, syllabus);
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
        Schema::dropIfExists('intended_learning_outcome');
    }
};
