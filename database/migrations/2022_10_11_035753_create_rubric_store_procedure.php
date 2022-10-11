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
        // Membuat get procedure - Yehezkiel Imannuel
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_rubric_by_id`;
                CREATE PROCEDURE  `get_rubric_by_id` (IN id_rubc int)
                
                BEGIN
                SELECT * FROM rubric 
                where id = id_rubc;
                END;
                
                ";

            DB::unprepared($get_procedure);

        $create_procedure = "DROP PROCEDURE IF EXISTS `create_rubric_by_id`;
                CREATE PROCEDURE `create_rubric_by_id` (IN id_rubc int, IN asg_id int, IN nme varchar(1024))

                BEGIN 
                insert into rubric
                values(id_rubc, asg_id, nme);
                END;

        
                ";
            DB::unprepared($create_procedure);
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
