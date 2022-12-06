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
            DROP TRIGGER IF EXISTS trigger_response;
            CREATE TRIGGER trigger_response
            AFTER UPDATE ON response
            FOR EACH ROW
            UPDATE notification 
	            SET response = new.response
	            WHERE response_id = new.id 
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_response');
    }
};
