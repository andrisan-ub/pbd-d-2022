<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::raw('DELIMITER $$
            CREATE FUNCTION count_answer(id_discuss INT) RETURNS INT DETERMINISTIC
            BEGIN
                DECLARE jml_answers INT;
                SELECT COUNT(id) AS jumlah_answers INTO jml_answers FROM answers
                WHERE discuss_forum_id = id_discuss;
            RETURN jml_answers;
            END');

        DB::raw('DELIMITER $$
            CREATE FUNCTION count_question(id_course INT) RETURNS INT DETERMINISTIC
            BEGIN
                DECLARE jml_questions INT;
                SELECT COUNT(id) AS jumlah_questions INTO jml_questions FROM discuss_forumss
                WHERE course_id = id_course;
            RETURN jml_questions;
            END');

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
