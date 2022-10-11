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
        // procedure read - Bagas Meganta - 215150701111004
        $procedure_read = "DROP PROCEDURE IF EXISTS `get_study_program_by_study_program_id`;
            CREATE PROCEDURE `get_study_program_by_study_program_id` (IN new_idx int)
            BEGIN
            SELECT * FROM study_program WHERE id = new_idx;
            END;";
  
        \DB::unprepared($procedure_read);

        //procedure update - Bagas Meganta - 215150701111004
        $procedure_update = "DROP PROCEDURE IF EXISTS `update_study_program_by_study_program_id`;
            CREATE PROCEDURE `update_study_program_by_study_program_id` (IN new_id int, IN new_department_id int, IN new_name varchar(255))
            BEGIN
            UPDATE study_program SET department_id = new_department_id WHERE id = new_id;
            UPDATE study_program SET name = new_name WHERE id = new_id;
            END;";
  
        \DB::unprepared($procedure_update);

        //procedure create - Muchammad Saifurrijaal - 215150701111006
        $procedure_create = "DROP PROCEDURE IF EXISTS `create_study_program_by_study_program_id`;
            CREATE PROCEDURE `create_study_program_by_study_program_id` (new_id int, new_department_id int, new_name varchar(255))
            BEGIN
            INSERT INTO study_program
            VALUES(new_id, new_department_id, new_name);
            END;";
  
        \DB::unprepared($procedure_create);

        //procedure delete - Muchammad Saifurrijaal - 215150701111006
        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_study_program_by_study_program_id`;
            CREATE PROCEDURE `delete_study_program_by_study_program_id` (new_id int)
            BEGIN
            DELETE FROM study_program
            WHERE id = new_id;
            END;";
  
        \DB::unprepared($procedure_delete);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_program_store_procedure');
    }
};
