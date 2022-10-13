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
    
    // Procedure loop - Fairuz - 215150701111023
    $loopAssignment_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_loop`;
    CREATE PROCEDURE `kelompok3_create_loop`(IN `i` INT(10), IN `j` INT(10))
    BEGIN
    REPEAT
        SELECT assignment_plan_tasks.id, assignment_plans.title, assignment_plan_tasks.description
            FROM assignment_plan_tasks, assignment_plans
            WHERE assignment_plan_tasks.assignment_plan_id = assignment_plans.id AND assignment_plan_tasks.id = i;
             SET i = i + 1;
             UNTIL i = j + 1
                END REPEAT;
    END;";
    
    \DB::unprepared($loopAssignment_procedure);

    // Procedure loop - Maersyifaa - 215150700111031
    $loopLLO_procedure = "DROP PROCEDURE IF EXISTS `kelompok3_create_loop`;
    CREATE PROCEDURE `kelompok3_create_loop`(IN `i` INT(10), IN `j` INT(10))
    BEGIN
    REPEAT
        SELECT llo.id, llo.description, c.max_point
        FROM lesson_learning_outcomes, criterias
            WHERE lesson_learning_outcomes.criterias_id = criterias.id AND lesson_learning_outcomes.id = i;
             SET i = i + 1;
             UNTIL i = j + 1
                END REPEAT;
    END;";
    
    \DB::unprepared($loopLLO_procedure);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok3_create_loop');
    }
};
