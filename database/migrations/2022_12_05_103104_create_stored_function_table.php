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
        $stored_function = "DROP FUNCTION IF EXISTS `function_count_notif`;
        CREATE FUNCTION `function_count_notif`()
        RETURNS int(11)
        BEGIN
            DECLARE notif_amount INT;
            SELECT COUNT(id) AS notifs_amount INTO notif_amount FROM notifications;
            RETURN notif_amount;
        END";
        DB::unprepared($stored_function);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_function');
    }
};
