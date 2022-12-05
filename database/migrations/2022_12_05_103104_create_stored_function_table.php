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
        $stored_function = "CREATE DEFINER=`root`@`localhost`
        FUNCTION `count_notif`()
        RETURNS int(11) DETERMINISTIC
        BEGIN
            DECLARE notif_amount INT;
            SELECT COUNT(id) AS notifs_amount INTO notif_amount FROM notifications
            WHERE jenis_notifikasi = 'reminder';
        RETURN notif_amount;
        END";
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
