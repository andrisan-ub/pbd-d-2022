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
        // CREATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_create_syllabus`;
        CREATE PROCEDURE `kelompok5_create_syllabus` (

            in_id bigint(20),
            in_course_id bigint(20),
            in_title varchar(255),
            in_author text,
            in_head_of_study_program varchar(512)

        )
        BEGIN

        INSERT INTO syllabus
            VALUES(in_id, in_course_id, in_title, in_author, in_head_of_study_program);

        END;";

        DB::unprepared($procedure_create);

        // UPDATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // update baris pada syllabus berdasarkan id
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok5_update_syllabus`;
        CREATE PROCEDURE `kelompok5_update_syllabus` (

            IN p_id bigint(20),
            IN up_course_id bigint(20),
            IN up_title varchar(255),
            IN up_author text,
            IN up_head_of_study_program varchar(512)

        )
        BEGIN

        UPDATE syllabus SET course_id = up_course_id, title = up_title, author = up_author, head_of_study_program = up_head_of_study_program
        WHERE id = p_id;

        END;";

        DB::unprepared($procedure_update);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syllabus_store_procedure');
    }
};
