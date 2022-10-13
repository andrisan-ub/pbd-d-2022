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
        //procedure create - Erwin Marbinoto Tamba - 215150701111026
        $procedure_create_new = "DROP PROCEDURE IF EXISTS `kelompok_1_create_faculties`;
       CREATE PROCEDURE `kelompok_1_create_faculties` (IN new_id int, IN new_name varchar(255))
       BEGIN
       INSERT INTO faculties VALUES(new_id, new_name);
       END;";

       \DB::unprepared($procedure_create_new);
        //procedure update - Erwin Marbinoto Tamba - 215150701111026
        $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok_1_update_faculties`;
        CREATE PROCEDURE `kelompok_1_update_faculties` (IN new_id int, IN new_name varchar(255))
        BEGIN
        SELECT * FROM faculties;
        END;";

        \DB::unprepared($procedure_update);
        //procedure delete - Erwin Marbinoto Tamba - 215150701111026
       $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok_1_delete_faculties`;
         CREATE PROCEDURE `kelompok_1_delete_faculties` (new_id int)
         BEGIN
         DELETE FROM faculties
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
