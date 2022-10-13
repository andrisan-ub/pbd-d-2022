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
        // Membuat read procedure - Nazwa Annila - 215150701111009
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_criterion_by_id`;
                CREATE PROCEDURE `get_criterion_by_id` (
                    IN id_crit int
                )

                BEGIN 
                SELECT * FROM criterion
                WHERE id = id_crit;
                END;

                ";
            DB::unprepared($get_procedure);
        
            // Membuat create procedure - Nazwa Annila - 215150701111009
            $create_procedure = "DROP PROCEDURE IF EXISTS `create_criterion_by_id`;
            CREATE PROCEDURE `create_criterion_by_id` (
                IN id_crit int, 
                IN id_rubc int,
                IN id_llo int, 
                IN new_title varchar(1024),
                IN new_description varchar(1024),
                IN new_max_point float, 
                new_create_at datetime,
                new_update_at datetime
            )

            BEGIN 
            INSERT INTO rubric(id, rubric_id, llo_id, title, description, max_point)
            VALUES(id_crit, id_rubc, id_llo, new_title, new_description, new_max_point);
            END;

    
            ";
        DB::unprepared($create_procedure);

        // Membuat update procedure - Ridha Annisa Sabilla - 215150701111016

        $update_procedure = "DROP PROCEDURE IF EXISTS `update_criterion_by_id`;
                CREATE PROCEDURE `update_criterion_by_id` (
                    IN id_crit int, 
                    IN new_title varchar(1024),
                    IN new_description varchar(1024)
                )

                BEGIN 
                UPDATE criterion SET title = new_title, description = new_description
                WHERE id = id_crit;
                END;

        
                ";
            DB::unprepared($update_procedure);

        // Membuat delete procedure - Ridha Annisa Sabilla - 215150701111016

        $delete_procedure = "DROP PROCEDURE IF EXISTS `delete_criterion_by_id`;
                CREATE PROCEDURE `delete_criterion_by_id` (
                    IN id_crit int
                )

                BEGIN 
                DELETE FROM criterion
                WHERE id = id_crit;
                END;

        
                ";
            DB::unprepared($delete_procedure);
        
        // Membuat if procedure - Diajeng Kinasih Qurota'ayun - 215150700111022
        $if_procedure = "DROP PROCEDURE IF EXISTS `if_criterion`;
        
                    CREATE PROCEDURE `if_criterion` (IN input int)

                    BEGIN
                        IF input <= 8 THEN
                    
                    SELECT * FROM criterion
                    WHERE id = input;
                    END IF;
                END;
        ";
        DB::unprepared($if_procedure);

        // Membuat looping procedure - Alishza Putri Rahmadina - 215150700111013
        $loop_procedure = "DROP PROCEDURE IF EXISTS `loop_criterion`;
        CREATE PROCEDURE `loop_criterion` (IN a int)
        
        BEGIN 
        WHILE a <= 10 DO
        SELECT * FROM criterion
        WHERE id = a;
        set a = a * 2;
        END WHILE;
        END;

        ";
        DB::unprepared($loop_procedure);

        $join_procedure = "DROP PROCEDURE IF EXISTS `join_table_criterion`;
        CREATE PROCEDURE `join_table_criterion`()
        
                BEGIN
                SELECT sl.id, sl.title, lp.study_material, lp.learning_method
                FROM learning_plan as lp
                JOIN syllabus as sl
                ON sl.id = lp.syllabus_id;
                END;
                ";
        DB::unprepared($join_procedure);
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
