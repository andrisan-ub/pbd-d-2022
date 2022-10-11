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
        //procedure get by id - Redomeire - 215150701111032
       $procedure_get_by_id = "DROP PROCEDURE IF EXISTS `get_criterion_by_criterion_id`;
       CREATE PROCEDURE `get_criterion_by_criterion_id` (IN new_id int)
       BEGIN
       SELECT * FROM criterion WHERE id = new_id;
       END;";

       DB::unprepared($procedure_get_by_id);

        //procedure create - Redomeire - 215150701111032
       $procedure_create_new = "DROP PROCEDURE IF EXISTS `create_criterion`;
       CREATE PROCEDURE `create_criterion` (IN new_id int, IN new_title varchar(1024), IN new_description varchar(1024), IN new_max_point float)
       BEGIN
       INSERT INTO criterion VALUES(new_id, new_title, new_description, new_max_point);
       END;";

       DB::unprepared($procedure_create_new);

        //procedure update - Redomeire - 215150701111032
       $procedure_update_by_id = "DROP PROCEDURE IF EXISTS `update_criterion`;
       CREATE PROCEDURE `update_criterion` (IN new_id int, IN new_title varchar(1024), IN new_description varchar(1024), IN new_max_point float)
       BEGIN
       UPDATE criterion 
       SET title = new_title, SET description = new_description, SET max_point = new_max_point
       WHERE id = new_id;
       END;";

       DB::unprepared($procedure_create_new);

       //procedure delete by id - Redomeire - 215150701111032
       $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_criterion_by_criterion_id`;
       CREATE PROCEDURE `delete_criterion_by_criterion_id` (IN new_id int)
       BEGIN
       DELETE FROM criterion WHERE id = new_id;
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
        Schema::dropIfExists('criterion_store_procedure');
    }
};
