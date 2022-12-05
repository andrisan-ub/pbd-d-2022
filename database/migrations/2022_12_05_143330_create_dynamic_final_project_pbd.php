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
        /*Schema::create('dynamic_final_project_pbd', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });*/

        /*stored procedure - dynamic sql untuk 
*/
$dynamic_sql = `DROP PROCEDURE IF EXIST' SP_insert_table';
CREATE PROCEDURE 'SP_insert_table' (
	IN TBL VARCHAR(50),
    IN VAL TEXT
    )
    BEGIN 
    SET @SQL = CONCAT ("INSERT INTO ", TBL, "VALUES (", VAL,");");
    PREPARE STAT FROM @SQL;
    EXECUTE STAT; 
    
    END;`;
    /*DB::unprepared($dynamic_sql);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_final_project_pbd');
    }
};
