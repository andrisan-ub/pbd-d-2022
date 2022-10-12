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
        // LOOPING PROCEDURE - Kevin Leonardo Julianto - 215150701111039
        // Loop untuk menampilkan tabel criterion_level dengan point yang lebih dari atau sama dengan 4.25
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok5_loop_criterion_level`;
                CREATE PROCEDURE `kelompok5_loop_criterion_level` ()
                BEGIN
                    DECLARE x float;
                    SET x = 4.25; 
                    WHILE x <= 10 DO
                    SELECT * FROM criterion_level
                    WHERE point = x;
                    SET x = x + 0.25;
                    END WHILE;
                END;";

        DB::unprepared($procedure_loop);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('looping_s_p');
    }
};
