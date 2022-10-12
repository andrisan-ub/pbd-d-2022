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
        // CREATE PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Create untuk menambah baris data pada tabel syllabus
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


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_s_p');
    }
};
