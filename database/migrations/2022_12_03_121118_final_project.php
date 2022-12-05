<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            DROP FUNCTION IF EXISTS count_answer;
            CREATE FUNCTION count_answer(id_discuss INT) RETURNS INT DETERMINISTIC
            BEGIN
                DECLARE jml_answers INT;
                SELECT COUNT(id) AS jumlah_answers INTO jml_answers FROM answers
                WHERE discuss_forum_id = id_discuss;
            RETURN jml_answers;
            END");

        DB::unprepared("
            DROP FUNCTION IF EXISTS count_question;
            CREATE FUNCTION count_question(id_course INT) RETURNS INT DETERMINISTIC
            BEGIN
                DECLARE jml_questions INT;
                SELECT COUNT(id) AS jumlah_questions INTO jml_questions FROM discuss_forums
                WHERE course_id = id_course;
            RETURN jml_questions;
            END");

        DB::unprepared("DROP PROCEDURE IF EXISTS discuss_is_answered;
                CREATE PROCEDURE discuss_is_answered ()
                BEGIN
                SELECT * FROM discuss_forums WHERE is_answered = true;
                END;");

        DB::unprepared("DROP PROCEDURE IF EXISTS confirm_answer;
            CREATE PROCEDURE confirm_answer(new_id INT, new_status BOOLEAN)
            BEGIN
                UPDATE answers
                    SET is_selected = new_status
                WHERE id = new_id;
            END;");        

        DB::unprepared("DROP PROCEDURE IF EXISTS count_discuss_is_answered;
                CREATE PROCEDURE count_discuss_is_answered(OUT total_question DOUBLE)
                BEGIN
                    DECLARE c_end INT;
                    DECLARE answered BOOLEAN;
                    DECLARE counter INT;
                    DECLARE c_answered CURSOR FOR SELECT is_answered FROM discuss_forums;
                    DECLARE CONTINUE HANDLER FOR NOT FOUND SET c_end = 1;
                    SET answered = false, counter = 0;
                    OPEN c_answered;
                       WHILE c_end is null DO
                            IF answered = true THEN
                            SET counter = counter + 1;
                            END IF;
                            FETCH c_answered INTO answered;    
                       END WHILE;
                    CLOSE c_answered;
                    SET total_question = counter;
                END;");

    DB::unprepared('
        DROP TRIGGER IF EXISTS update_status;
        CREATE TRIGGER update_status AFTER UPDATE ON `answers` FOR EACH ROW
        BEGIN 
            UPDATE discuss_forums
            INNER JOIN answers
            ON answers.discuss_forum_id = discuss_forums.id
                SET discuss_forums.is_answered = 1
                WHERE answers.is_selected = 1;
        END
        ');
    
    DB::unprepared('
        DROP TRIGGER IF EXISTS delete_status;
        CREATE TRIGGER delete_status AFTER DELETE ON answers FOR EACH ROW
        BEGIN
            UPDATE discuss_forums
            INNER JOIN answers
            ON answers.discuss_forum_id = discuss_forums.id
                SET discuss_forums.is_answered = 0
                WHERE answers.is_selected = 1;
        END                        
        ');


    DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_update_discuss_answer;
        CREATE PROCEDURE sp_update_discuss_answer(
            IN TABEL VARCHAR (50),
            IN PK VARCHAR (50),
            IN DATA_PK VARCHAR (50),
            IN DATA TEXT
        )
        BEGIN 
           SET @SQL=CONCAT("UPDATE ", TABEL," SET ", DATA, " WHERE ", PK, "=",  DATA_PK);
           PREPARE STAT FROM @SQL;
           EXECUTE STAT;
    END');  
        
        DB::unprepared('
        DROP PROCEDURE IF EXISTS sp_delete_discuss_answer;
        CREATE PROCEDURE sp_delete_discuss_answer(
            IN TABEL VARCHAR (50),
            IN PK VARCHAR (50),
            IN DATA_PK VARCHAR (50),
            IN DATA TEXT
        )
        BEGIN 
           SET @SQL=CONCAT("DELETE FROM ", TABEL, " WHERE ", PK, "=",  DATA_PK);
           PREPARE STAT FROM @SQL;
           EXECUTE STAT;
        END');
                       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP FUNCTION IF EXISTS count_answer');

    }
};
