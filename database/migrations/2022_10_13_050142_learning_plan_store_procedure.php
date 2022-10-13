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
    $create_procedure = "DROP PROCEDURE IF EXISTS
    `create_learning_plan_by_id`;
        CREATE PROCEDURE `create_learning_plan_by_id` (
            id_learn_plan int,
            new_syllabus_id int,
            new_week_number int,
            new_llo_id int,
            new_study_material text,
            new_learn_method text,
            new_est_time varchar(1024),
            new_created_at int,
            new_updated_at int )

        BEGIN
        INSERT INTO course_class(
          id, syllabus_id, week_number, llo_id, study_material, learning_method, estimated_time, created_at, updated_at)
        VALUES(
          d_learn_plan, new_syllabus_id, new_week_number, new_llo_id, new_study_material, new_learn_method, new_est_time, new_created_at, new_updated_at);
        END;

        ";
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
