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
    
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `get_response_by_id`;
        CREATE PROCEDURE  `get_response_by_id` (IN id_response int)
        
        BEGIN
        SELECT * FROM response 
        where id = id_response;
        END;");
        
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `create_response_by_id`;
        CREATE PROCEDURE `create_response_by_id` (
            IN id_response int, 
            IN id_cc int, 
            IN id_student_user int,
            IN new_response varchar(1024)
        )

        BEGIN 
        INSERT INTO response(id, crisis_center_id, student_user_id, response)
        VALUES(id_response, id_cc, id_student_user, new_response);
        END;");

    DB::unprepared("
        DROP PROCEDURE IF EXISTS `update_response_by_id`;
        CREATE PROCEDURE `update_response_by_id` (
            IN id_response int, 
            IN new_response varchar(1024)
        )

        BEGIN 
        UPDATE response SET topik = new_response
        WHERE id = id_response;
        END;");

    DB::unprepared("
        DROP PROCEDURE IF EXISTS `delete_response_by_id`;
        CREATE PROCEDURE `delete_response_by_id` (
            id_response int
        )

        BEGIN 
        DELETE FROM response
        WHERE id = id_response;
        END;");

    DB::unprepared("
        DROP PROCEDURE IF EXISTS `if_response`;

        CREATE PROCEDURE `if_response` (IN input int)

        BEGIN
            IF input <= 10 THEN

        SELECT * FROM response
        WHERE id = input;
        END IF;
        END;");
        
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `loop_response`;
                CREATE PROCEDURE `loop_response` ()
                
                BEGIN
                WHILE a <= 10 DO
                SELECT * FROM criterion
                WHERE id = a;
                set a = a * 2;
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
        Schema::dropIfExists('store_procedure_response');
    }
};
