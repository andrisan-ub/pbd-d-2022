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

        //procedure create - Bagas Meganata - 215150701111004
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok_1_create_departments_by_departments_id`;
            CREATE PROCEDURE `kelompok_1_create_departments_by_departments_id` (IN new_id int, IN new_faculty_id int, IN new_name varchar(255))
            BEGIN
            INSERT INTO departments
            VALUES(new_id, new_faculty_id, new_name);
            END;";

            DB::unprepared($procedure_create);

        //procedure delete - Bagas Meganata - 215150701111004
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok_1_delete_departments_by_departments_id`;
            CREATE PROCEDURE `kelompok_1_delete_departments_by_departments_id` (IN new_id int)
            BEGIN
            DELETE FROM departments
            WHERE id = new_id;
            END;";

            DB::unprepared($procedure_delete);

        //procedure update - Bagas Meganata - 215150701111004
        $procedure_update_by_id = "DROP PROCEDURE IF EXISTS `kelompok_1_update_departments`;
            CREATE PROCEDURE `kelompok_1_update_departments` (IN new_id int, IN new_faculty_id int, IN new_name varchar(255))
            BEGIN
            UPDATE departments SET faculty_id = new_faculty_id WHERE id = new_id;
            UPDATE study_programs SET name = new_name WHERE id = new_id;
            WHERE id = new_id;
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
        //
    }
};
