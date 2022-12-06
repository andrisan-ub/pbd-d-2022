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
        // NOTIFICATION COUNT
        $count_function = "DROP FUNCTION IF EXISTS `count_notif`;
        CREATE FUNCTION `count_notif`()
        RETURNS int(11)
        DETERMINISTIC
        BEGIN
            DECLARE notif_amount INT;
            SELECT COUNT(id) AS notifs_amount INTO notif_amount FROM notifications;
            RETURN notif_amount;
        END";
        DB::unprepared($count_function);

        // NOTIFICATION CHECK
        $max_function = "DROP FUNCTION IF EXISTS `check_notif`;
        CREATE FUNCTION `check_notif`()
        RETURNS TEXT
        DETERMINISTIC
        BEGIN
            DECLARE last_id INT;
            DECLARE last_notif TEXT;
            SELECT jenis_notifikasi AS last_notifs INTO last_notif FROM notifications WHERE MAX(id) = last_id;
            IF jenis_notifikasi = 'reminder' THEN
            SET last_notif = 'kamu mendapatkan reminder baru';
            ELSEIF jenis_notifikasi = 'announcement' THEN
            SET last_notif = 'kamu mendapatkan announcement baru';
            END IF;
            RETURN last_notif;
        END";
        DB::unprepared($max_function);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('count_function');
        Schema::dropIfExists('max_function');
    }
};
