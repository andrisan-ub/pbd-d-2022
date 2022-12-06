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
        // STORED PROCEDURE - Dynamic SQL untuk menginsert tabel notifikasi'
        // $dynamic_sql = 'DROP PROCEDURE IF EXISTS `SP_INSERT_TABLE`;
        // CREATE PROCEDURE `SP_INSERT_TABEL` (
        //     IN TBL VARCHAR(50),
        //     IN VAL TEXT
        //     )
        //     BEGIN
        //     SET @SQL = CONCAT ("INSERT INTO ", TBL, "VALUES (", VAL,");");
        //     PREPARE STAT FROM @SQL;
        //     EXECUTE STAT;

        //     END;';
        //     DB::unprepared($dynamic_sql);
        

        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamicsql_notification');
    }
};
