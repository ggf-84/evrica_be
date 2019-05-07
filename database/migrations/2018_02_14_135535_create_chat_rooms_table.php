<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('chat_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('guest_id')->unsigned()->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            $table->boolean('is_public')->default('1');
            $table->boolean('is_encrypted')->default('0');
            $table->boolean('is_active')->default('1');
            $table->boolean('is_guest')->default('0');
            $table->boolean('is_default')->default('1')->comment('check if room is one-to-many and not one-one');
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
        //

        Schema::dropIfExists('chat_rooms');
    }
}
