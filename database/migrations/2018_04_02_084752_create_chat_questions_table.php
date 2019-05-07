<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guest_id')->unsigned()->nullable();
            $table->integer('room_id')->unsigned()->nullable();
            $table->string('question')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->comment('anwered by');
            $table->integer('company_id')->unsigned()->nullable();
            $table->boolean('is_answered')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_questions');
    }
}
