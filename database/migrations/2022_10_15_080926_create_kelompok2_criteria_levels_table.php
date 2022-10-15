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
        CREATE PROCEDURE `kelompok2_create_criteria_levels`(IN_id BIGINT UNSIGNED, IN_criteria_id BIGINT UNSIGNED, IN_point FLOAT, IN_title VARCHAR(1024), IN_description TEXT)
        BEGIN 
        INSERT INTO criteria_levels VALUES (IN_id, IN_criteria_id, IN_point, IN_title, IN_description);
        END;";

        DB::unprepared($procedure_create_new);

         // Procedure update - Firda Kusumaw2ardhani  - 215150701111031
         $update_procedure = "DROP PROCEDURE IF EXISTS `kelompok2_student_grades`;
        CREATE PROCEDURE kelompok2_student_grades (IN new_id bigint, IN new_student_user_id bigint)
        BEGIN
            UPDATE student_grades SET student_user_id = new_student_user_id 
            WHERE id = new_id;
        END;";
        DB::unprepared($update_procedure);
       
        
        //CONDITION PROCEDURE - Firda kusumawardhani Hillal - 215150701111031
        
        $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok3_condition_final_score`;
        CREATE PROCEDURE `kelompok3_condition_final_score`()

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

    }

    






        


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_levels');
    }
};
