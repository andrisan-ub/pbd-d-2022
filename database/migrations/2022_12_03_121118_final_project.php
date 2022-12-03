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
       DB::raw('DELIMITER $$
            CREATE FUNCTION count_answer(id_discuss INT) RETURNS INT DETERMINISTIC
            BEGIN
                DECLARE jml_answer INT;
                SELECT COUNT(id) AS jumlah_answer INTO jml_answer FROM answers
                WHERE discuss_forum_id = id_discuss;
            RETURN jml_answer;
            END
        
            ');

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
