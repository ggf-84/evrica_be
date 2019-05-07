<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomGuestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('room_guests', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('guest_id')->unsigned()->nullable();
          $table->integer('room_id')->unsigned()->nullable();
          $table->timestamp('online');
          $table->boolean('has_left')->default('0');
          $table->integer('last_message_id')->unsigned()->nullable()->comment('last message that guest will get');
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
        Schema::dropIfExists('room_guests');
    }

}
