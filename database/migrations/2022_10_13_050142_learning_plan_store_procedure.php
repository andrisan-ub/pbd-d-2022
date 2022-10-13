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
        // procedure read - Muhammad Yusuf Alhafiz - 215150707111022
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_learning_plan_by_id`;
        CREATE PROCEDURE `get_learning_plan_by_id` (IN id_learn_pln int)

        BEGIN
        SELECT * FROM learning_plan WHERE id = id_learn_pln;
        END;

        ";

       \DB::unprepared($get_procedure);

       //create procedure - Muhammad Yusuf Alhafiz - 215150707111022
       $create_procedure = "DROP PROCEDURE IF EXISTS `create_learning_plan_by_id`;
           CREATE PROCEDURE `create_learning_plan_by_id` (
               id_learn_pln int,
               syll_id int,
               week_no int,
               lesson_outcome_id int,
               std_material varchar(1024),
               learning_mtd varchar(1024),
               est_time varchar(1024),
               new_created_at int,
               new_updated_at int )

           BEGIN
           INSERT INTO learning_plan(
               id, syllabus_id, week_number, llo_id, study_material, learning_method, estimated_time, created_at, updated_at)
           VALUES(
               id_learn_pln, syll_id, week_no, lesson_outcome_id, std_material, learning_mtd, est_time, new_created_at, new_updated_at);
           END;
           
           ";

       \DB::unprepared($create_procedure);
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
