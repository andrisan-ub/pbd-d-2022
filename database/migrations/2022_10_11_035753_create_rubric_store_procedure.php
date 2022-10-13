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
        
        // Membuat update procedure - Alishza Putri Rahmadina - 215150700111013

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

        // Membuat delete procedure - Alishza Putri Rahmadina - 215150700111013

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

        //  Membuat kondisi procedure - Nazwa Annila - 215150701111009
        $if_procedure = "DROP PROCEDURE IF EXISTS `if_rubric`;

                CREATE PROCEDURE `if_rubric` (IN input int)

                BEGIN
                    IF input < 5 THEN

                SELECT * FROM rubric
                WHERE id = input;
                END IF;
            END;

            ";

            DB::unprepared($if_procedure);
        
        // Membuat looping procedure - Yehezkiel Imannuel - 215150701111018 
        $loop_procedure = "DROP PROCEDURE IF EXISTS `loop_rubric`;
                CREATE PROCEDURE `loop_rubric` ()
                
                BEGIN
                declare n int;
                set n = 1;
                WHILE n <= 5 DO
                SELECT * FROM rubric
                WHERE id = n;
                set n = n + 1;
                END WHILE;
                END;

                ";
            DB::unprepared($loop_procedure);
                    

        // Membuat join procedure antara tabel users, course, dan study program - Yehezkiel Imannuel - 215150701111018
        $join_procedure = "DROP PROCEDURE IF EXISTS `join_table_rubric`;
                CREATE PROCEDURE `join_table_rubric`()

                BEGIN
                SELECT u.id, u.name as student, u.email, c.name as mata_kuliah ,sp.name as nama_prodi ,c.course_credit as sks
                FROM users as u, course as c, study_program as sp
                WHERE u.id = c.creator_user_id
                AND sp.id  = c.study_program_id;
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
        Schema::dropIfExists('rubric_store_procedure');
    }
};
