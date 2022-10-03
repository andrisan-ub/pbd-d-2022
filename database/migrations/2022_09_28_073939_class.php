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
        $table->unsignedBigInteger('id')->primary;
            $table->varchar('name',1024);
            $table->varchar('thumbnail_img',1024);
            $table->varchar('class_code',256);
            $table->unsignedBigInteger('creator_user_id')->foreign;
            $table->integer('created_at');
            $table->integer('updated_at');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('class');
    }
};
