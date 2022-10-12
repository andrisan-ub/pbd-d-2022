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
        // UPDATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Update untuk mengubah data pada tabel syllabus berdasarkan id
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
        Schema::dropIfExists('update_s_p');
    }
};
