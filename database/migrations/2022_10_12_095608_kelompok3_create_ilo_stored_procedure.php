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
        // CREATE by NAUFAL AR - 215150701111014
        $procedure_create = "DROP PROCEDURE IF EXISTS 'create_ilo';
        CREATE PROCEDURE 'create_ilo' (
            cr_id BIGINT(20) UNSIGNED,
            cr_syllabus_id BIGINT(20) UNSIGNED,
            cr_position INT,
            cr_description TEXT
        )
        BEGIN
        INSERT INTO intended_learning_outcome
            VALUES(id, position, description, syllabus);
        END";

        // UPDATE by SHAFA AF - 215150700111057
        $procedure_update = "DROP PROCEDURE IF EXSIST 'update_ilo';
        CREATE PROCEDURE 'kelompok3_update_ilo'(
            up_id BIGINT(20) UNSIGNED,
            up_syllabus_id BIGINT(20) UNSIGNED,
            up_position INT(20),
            up_description text
        )
        BEGIN
            UPDATE intended_learning_outcome set
            syllabus_id = up_syllabus_id,
            position = up_position,
            description = up_description,
            WHERE id = up_id;
        END";
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
