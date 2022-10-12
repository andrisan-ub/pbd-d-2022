<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok3_create_ilo`;
        CREATE PROCEDURE `kelompok3_create_ilo` (
            cr_id BIGINT(20) UNSIGNED,
            cr_syllabus_id BIGINT(20) UNSIGNED,
            cr_position INT,
            cr_description TEXT
        )
        BEGIN
        INSERT INTO intended_learning_outcome
            VALUES(id, position, description, syllabus);
        END;";

        DB::unprepared($procedure_create);

        // UPDATE by SHAFA AF - 215150700111057
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok3_update_ilo`;
        CREATE PROCEDURE `kelompok3_update_ilo`(
            up_id BIGINT(20) UNSIGNED,
            up_syllabus_id BIGINT(20) UNSIGNED,
            up_position INT(20),
            up_description text
        )
        BEGIN
            UPDATE intended_learning_outcome set
            syllabus_id = up_syllabus_id
            WHERE id = up_id;
            UPDATE intended_learning_outcome set
            position = up_position
            WHERE id = up_id;
            UPDATE intended_learning_outcome set
            description = up_description
            WHERE id = up_id;
        END;";

        DB::unprepared($procedure_update);

        // DELETE by SHAFA AF - 215150700111057
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok3_delete_ilo`;
        CREATE PROCEDURE `kelompok3_delete_ilo`(
            dr_id BIGINT(20) UNSIGNED
        )
        BEGIN
            DELETE from intended_learning_outcome
            WHERE id = dr_id;
        END;";

        DB::unprepared($procedure_delete);


        // READ by NAUFAL AR - 215150701111014
        $procedure_read = "DROP PROCEDURE IF EXISTS `kelompok3_view_course_course_classes`;
        CREATE PROCEDURE `kelompok3_view_course_course_classes`()
        
        BEGIN
            SELECT co.name, co.code, cs.course_id, cs.class_code
            FROM courses co
            JOIN course_classes cs
            ON co.id = cs.course_id;
        END;";

        DB::unprepared($procedure_read);


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
