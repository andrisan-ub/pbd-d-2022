<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_user_id')->constrained('users');
            $table->foreignId('discuss_forum_id')->constrained('discuss_forums');
            $table->text('answer');
            $table->boolean('is_selected')->nullable()->default(false);
            $table->timestamps();
        });

        DB::unprepared('
        CREATE TRIGGER update_status AFTER UPDATE ON `answers` FOR EACH ROW
        BEGIN 
            UPDATE discuss_forums
            INNER JOIN answers
            ON answers.discuss_forum_id = discuss_forums.id
                SET discuss_forums.is_answered = 1
                WHERE answers.is_selected = 1;
        END
        ');

        DB::unprepared('
        CREATE TRIGGER delete_status BEFORE DELETE ON `answers` FOR EACH ROW
        BEGIN 
            UPDATE discuss_forums
            INNER JOIN answers
                SET discuss_forums.is_answered = 0
                WHERE answers.is_selected = 1;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
