<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        // Membuat read procedure - Yehezkiel Imannuel - 215150701111018
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_rubric_by_id`;
                CREATE PROCEDURE  `get_rubric_by_id` (IN id_rubc int)
                
                BEGIN
                SELECT * FROM rubric 
                where id = id_rubc;
                END;
                
                ";

            DB::unprepared($get_procedure);
        
        // Membuat create procedure - Yehezkiel Imannuel - 215150701111018

        $create_procedure = "DROP PROCEDURE IF EXISTS `create_rubric_by_id`;
                CREATE PROCEDURE `create_rubric_by_id` (
                    IN id_rubc int, 
                    IN asg_id int, 
                    IN new_title varchar(1024), 
                    new_create_at datetime,
                    new_update_at datetime
                )

                BEGIN 
                INSERT INTO rubric(id, assignment_plan_id, title)
                VALUES(id_rubc, asg_id, new_title);
                END;

        
                ";
            DB::unprepared($create_procedure);

        $update_procedure = "DROP PROCEDURE IF EXISTS `update_rubric_by_id`;
                CREATE PROCEDURE `update_rubric_by_id` (
                    IN id_rubc int, 
                    IN new_title varchar(1024)
                )

                BEGIN 
                UPDATE rubric SET title = new_title
                WHERE id = id_rubc;
                END;

        
                ";
            DB::unprepared($update_procedure);

        $delete_procedure = "DROP PROCEDURE IF EXISTS `delete_rubric_by_id`;
                CREATE PROCEDURE `delete_rubric_by_id` (
                    id_rubc int
                )

                BEGIN 
                DELETE FROM rubric
                WHERE id = id_rubc;
                END;

        
                ";
            DB::unprepared($delete_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubric_store_procedure');
    }
};
