<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // LOOPING PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Loop untuk menampilkan tabel criterion_level dengan point yang lebih dari atau sama dengan 4.25
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok5_loop_criterion_level`;
                CREATE PROCEDURE `kelompok5_loop_criterion_level` ()
                BEGIN
                    DECLARE x float;
                    SET x = 4.25; 
                    WHILE x <= 10 DO
                    SELECT * FROM criterion_level
                    WHERE point = x;
                    SET x = x + 0.25;
                    END WHILE;
                END;";

        DB::unprepared($procedure_loop);

        // LOOPING PROCEDURE - Rama Adhitya Widodo Putra - 215150700111052
        // Looping untuk menampilkan title dan description pada tabel criterion dengan batas j
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok5_loop_criterion_title_and_Description`;
            CREATE PROCEDURE `kelompok5_loop_criterion_title_and_Description`(
                IN i INT,
                IN j INT
            )
            BEGIN
                REPEAT
                    SELECT lesson_learning_outcome.id, criterion.description, criterion.title
                    FROM lesson_learning_outcome, criterion
                    WHERE lesson_learning_outcome.id = criterion.llo_id AND lesson_learning_outcome.id = i;
                    SET i = i + 1;
                UNTIL i >= j
                END REPEAT;
            END;";

        DB::unprepared($procedure_loop);

        // LOOPING PROCEDURE - Ardhi Wahyu Hidayat - 215150707111038
        // Looping untuk menampilkan tabel grading_plan
        $loop_procedure = "DROP PROCEDURE IF EXISTS `kelompok5_loop_grading_plan`;
            CREATE PROCEDURE `kelompok5_loop_grading_plan`() 

            BEGIN
                declare i int;
                set i = 1; 
                WHILE i <= 10 DO 
                SELECT * FROM grading_plan
                WHERE id = i;
                set i = i + 2;
            END WHILE;
            END;

            ";
            DB::unprepared($loop_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('looping_s_p');
    }
};
