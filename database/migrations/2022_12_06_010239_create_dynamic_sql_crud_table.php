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
        DB::unprepared('
        DROP PROCEDURE IF EXISTS `ds_update_crisis_center`;
        CREATE PROCEDURE `ds_update_crisis_center`(
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
        DROP PROCEDURE IF EXISTS `ds_delete_crisis_center`;
        CREATE PROCEDURE `ds_delete_crisis_center`(
            IN TABEL VARCHAR (50),
            IN PK VARCHAR (50),
            IN DATA_PK VARCHAR (50)
        
        )
        BEGIN 
           SET @SQL=CONCAT("DELETE FROM ", TABEL," WHERE ", PK, "=",  DATA_PK);
           PREPARE STAT FROM @SQL;
           EXECUTE STAT;
        END');

        DB::unprepared('
        DROP PROCEDURE IF EXISTS `ds_insert_crisis_center`;
        CREATE PROCEDURE `ds_insert_crisis_center`(
            IN TABEL VARCHAR (50),
            IN DATA TEXT
        
        )
        BEGIN 
           SET @SQL=CONCAT("INSERT INTO ",TABEL," VALUES (",DATA,");");
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
        Schema::dropIfExists('dynamic_sql_crud');
    }
};
