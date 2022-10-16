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
        // Procedure create - Firda Kusumawardhani- 215150701111031
        $procedure_create_new= "DROP PROCEDURE IF EXISTS `kelompok2_create_criteria_levels`;
        CREATE PROCEDURE `kelompok2_create_criteria_levels` (IN_id BIGINT UNSIGNED, IN_criteria_id BIGINT UNSIGNED, IN_point FLOAT, IN_title VARCHAR(1024), IN_description TEXT)
        BEGIN 
        INSERT INTO criteria_levels VALUES (IN_id, IN_criteria_id, IN_point, IN_title, IN_description);
        END;";

        DB::unprepared($procedure_create_new);

        // Procedure update - Firda Kusumawardhani - 215150701111031
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_student_grades`;
        CREATE PROCEDURE kelompok2_student_grades (IN new_id bigint, IN new_student_user_id bigint)
        BEGIN
            UPDATE student_grades SET student_user_id = new_student_user_id 
            WHERE id = new_id;
        END;";
        DB::unprepared($update_procedure);
       
        
        //Procedure condition - Firda kusumawardhani - 215150701111031
        $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok2_score`;
        CREATE PROCEDURE `kelompok2_score`()
        BEGIN
        DECLARE nilai_akhir INT;
        DECLARE max_point INT;
        DECLARE keterangan VARCHAR(20);
        SELECT SUM(point) INTO nilai_akhir FROM criteria_levels WHERE NOT EXISTS (SELECT* FROM student_grades  WHERE criteria_levels.id=student_grades.id);
        SELECT COUNT(max_point) INTO max_point FROM criterias;
            if (NILAI_AKHIR)>=(MAX_POINT) THEN
               SET keterangan ='LULUS';
            ELSE
               SET keterangan ='TIDAK LULUS';
            END if;
            SELECT keterangan;
        END;";
        DB::unprepared($procedure_condition);


        //Procedure read - Clara Clarita Yung - 215150700111051
        $read_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_create_read`;
        CREATE PROCEDURE `kelompok2_create_read`()
        BEGIN
        SELECT cl.id, cl.criteria_id, cl.point, cl.title, cl.description, r.title from criteria_levels cl
        JOIN criterias c ON cl.criteria_id = c.id
        JOIN rubrics r ON r.id = c.rubric_id;
        END;";

        DB::unprepared($read_procedure);


        //Procedure delete - Clara Clarita Yung - 215150700111051
        $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_delete_join_classes`;
        CREATE PROCEDURE kelompok2_delete_join_classes (in del_id bigint)
        BEGIN
        delete from `join_classes` where id = del_id;
        END;";

        DB::unprepared($update_procedure);

        //Procedure looping - Clara Clarita Yung - 215150700111051
        $looping = "DROP PROCEDURE IF EXISTS `loop_criterion`;
        CREATE PROCEDURE`loop_criterion` (IN a int)
        BEGIN
            while a <= 10 do
            SELECT*FROM criterion WHERE id = a;
            set a = a*2;
            END while;
        END;";

        DB::unprepared($looping);
    }


    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok2_criteria_levels');
    }
};
