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
        
       //procedure get by id - Redomeire - 215150701111032
       $procedure_get_by_id = "DROP PROCEDURE IF EXISTS `kelompok_1_get_criterias_by_criterias_id`;
       CREATE PROCEDURE `kelompok_1_get_criterias_by_criterias_id` (IN new_id int)
       BEGIN
       SELECT * FROM criterias WHERE id = new_id;
       END;";

       DB::unprepared($procedure_get_by_id);

        //procedure create - Redomeire - 215150701111032
       $procedure_create_new = "DROP PROCEDURE IF EXISTS `kelompok_1_create_criterias`;
       CREATE PROCEDURE `kelompok_1_create_criterias` (IN new_id int, IN new_rubric_id int, IN new_llo_id int, IN new_title varchar(1024), IN new_description varchar(1024), IN new_max_point double(8,2), new_created_at datetime, new_updated_at datetime)
       BEGIN
       INSERT INTO criterias VALUES(new_id, new_rubric_id, new_llo_id, new_title, new_description, new_max_point, new_created_at, new_updated_at);
       END;";

       DB::unprepared($procedure_create_new);

        //procedure update - Redomeire - 215150701111032
       $procedure_update_by_id = "DROP PROCEDURE IF EXISTS `kelompok_1_update_criterias`;
       CREATE PROCEDURE `kelompok_1_update_criterias` (IN new_id int, IN new_title varchar(1024), IN new_description varchar(1024), IN new_max_point float)
       BEGIN
       UPDATE criterias
       SET title = new_title, SET description = new_description, SET max_point = new_max_point
       WHERE id = new_id;
       END;";

       DB::unprepared($procedure_create_new);

       //procedure delete by id - Redomeire - 215150701111032
       $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok_1_delete_criterion_by_criterias_id`;
       CREATE PROCEDURE `kelompok_1_delete_criterion_by_criterias_id` (IN new_id int)
       BEGIN
       DELETE FROM criterias WHERE id = new_id;
       END;";

       DB::unprepared($procedure_delete);

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
