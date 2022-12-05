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
        //
        DB::unprepared("
        CREATE FUNCTION cek_topik(topik TEXT) RETURNS TEXT DETERMINISTIC
        BEGIN
            DECLARE jawab TEXT;
                IF topik = 'ukt' THEN
                    SET jawab = 'Silahkan menghubungi pihak keuangan dan kemahasiswaan untuk mengajukan beasiswa';
                ELSEIF topik = 'akademik' THEN
                    SET jawab = 'Silahkan menunggu jawaban, terimakasih telah menghubungi crisis center';      
                END IF;
            RETURN jawab;
        END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stored_function_cek_topik_crisis_center');
    }
};
