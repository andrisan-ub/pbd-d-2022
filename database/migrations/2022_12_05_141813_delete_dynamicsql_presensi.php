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
        $dynamicsql = 'DROP PROCEDURE IF EXISTS `SP_DELETE_TABLE`;
        CREATE PROCEDURE `SP_DELETE_TABLE` (
            IN TBL VARCHAR (50),
            IN COL_PK VARCHAR (50),
            IN VAL_PK VARCHAR (50)
            )
            BEGIN
            SET @SQL=CONCAT ("DELETE FROM ", TBL, "WHERE", COL_PK,"=",VAL_PK);
            PREPARE STAT FROM @SQL;
            EXECUTE STAT;
            END;';
            
            DB::unprepared($dynamic_sql);
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
