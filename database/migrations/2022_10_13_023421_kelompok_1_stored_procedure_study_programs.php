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
        //procedure update - Bagas Meganta - 215150701111004
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok_1_update_study_programs_by_study_programs_id`;
        CREATE PROCEDURE `kelompok_1_update_study_programs_by_study_programs_id` (IN new_id int, IN new_department_id int, IN new_name varchar(255))
        BEGIN
        UPDATE study_programs SET department_id = new_department_id WHERE id = new_id;
        UPDATE study_programs SET name = new_name WHERE id = new_id;
        END;";

        \DB::unprepared($procedure_update);

        //procedure create - Muchammad Saifurrijaal - 215150701111006
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok_1_create_study_programs_by_study_programs_id`;
        CREATE PROCEDURE `kelompok_1_create_study_programs_by_study_programs_id` (new_id int, new_department_id int, new_name varchar(255))
        BEGIN
        INSERT INTO study_programs
        VALUES(new_id, new_department_id, new_name);
        END;";

        \DB::unprepared($procedure_create);

        //procedure delete - Muchammad Saifurrijaal - 215150701111006
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok_1_delete_study_programs_by_study_programs_id`;
        CREATE PROCEDURE `kelompok_1_delete_study_programs_by_study_programs_id` (new_id int)
        BEGIN
        DELETE FROM study_programs
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
        //
    }
};