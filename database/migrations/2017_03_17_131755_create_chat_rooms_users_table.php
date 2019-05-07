<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatRoomsUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('rooms_users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('room_id')->default(0);
        //     $table->integer('user_id')->default(0);
        //     $table->dateTime('online');
        //     // $table->integer('company_id')->default(0);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('rooms_users');
    }

}
