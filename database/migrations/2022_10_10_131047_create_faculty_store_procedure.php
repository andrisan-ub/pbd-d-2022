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
        $procedure_read = "DROP PROCEDURE IF EXISTS `get_faculty_by_facultyid`;
            CREATE PROCEDURE `get_faculty_by_facultyid` (IN new_id int)
            BEGIN
            SELECT * FROM faculty WHERE id = idx;
            END;";
  
        \DB::unprepared($procedure_read);

        $procedure_update = "DROP PROCEDURE IF EXISTS `update_faculty_by_facultyid`;
            CREATE PROCEDURE `update_faculty_by_facultyid` (IN new_id int, IN new_name varchar(255))
            BEGIN
            UPDATE faculty SET name = new_name WHERE id = new_id;
            END;";
  
        \DB::unprepared($procedure_update);

        $procedure_create = "DROP PROCEDURE IF EXISTS `create_faculty_by_facultyid`;
            CREATE PROCEDURE `create_faculty_by_facultyid` (new_id int, new_name varchar(255) )
            BEGIN
            INSERT INTO faculty
            VALUES(new_id, new_name);
            END;";
  
        \DB::unprepared($procedure_create);

        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_faculty_by_facultyid`;
            CREATE PROCEDURE `delete_faculty_by_facultyid` (new_id int)
            BEGIN
            DELETE FROM faculty
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
        Schema::dropIfExists('faculty_store_procedure');
    }
};
