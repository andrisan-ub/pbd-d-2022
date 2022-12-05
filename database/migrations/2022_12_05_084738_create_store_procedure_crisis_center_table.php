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
    
    // Membuat Store Procedure 
    DB::unprepared("
    DROP PROCEDURE IF EXISTS `get_crisis_center_by_id`;
        CREATE PROCEDURE  `get_crisis_center_by_id` (IN id_cc int)
        
        BEGIN
        SELECT * FROM crisis_center 
        where id = id_cc;
        END;");
        
    DB::unprepared("
    DROP PROCEDURE IF EXISTS `create_crisis_center_by_id`;
        CREATE PROCEDURE `create_crisis_center_by_id` (
            IN id_cc int, 
            IN id_student_user int, 
            IN id_study_program int,
            IN new_topik varchar(1024), 
            IN new_keluhan varchar(1024)
        )

        BEGIN 
        INSERT INTO crisis_center(id, student_user_id, study_program_id, topik, keluhan)
        VALUES(id_cc, id_student_user, id_study_program, new_topik, new_keluhan);
        END;");


    
    DB::unprepared("
       DROP PROCEDURE IF EXISTS `update_crisis_center_by_id`;
        CREATE PROCEDURE `update_crisis_center_by_id` (
            IN id_cc int, 
            IN new_topik varchar(1024)
        )

        BEGIN 
        UPDATE crisis_center SET topik = new_topik
        WHERE id = id_cc;
        END;");


    DB::unprepared("
        DROP PROCEDURE IF EXISTS `delete_crisis_center_by_id`;
        CREATE PROCEDURE `delete_crisis_center_by_id` (
            id_cc int
        )

        BEGIN 
        DELETE FROM crisis_center
        WHERE id = id_cc;
        END;");

    DB::unprepared("
        DROP PROCEDURE IF EXISTS `if_crisis_center`;

        CREATE PROCEDURE `if_crisis_center` (IN input int)

        BEGIN
            IF input < 5 THEN

        SELECT * FROM crisis_center
        WHERE id = input;
        END IF;
        END;");
        
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `loop_crisis_center`;
                CREATE PROCEDURE `loop_crisis_center` (IN input int)
                
                BEGIN
                DECLARE n int;
                set n = 0;
                WHILE n <= 5 DO
                SELECT * FROM crisis_center
                WHERE id = n;
                set n = n + 1;
                END WHILE;
                END;");
   
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_procedure_crisis_center');
    }
};