<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChatGuestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('chat_guests', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('token');
        //     $table->string('name');
        //     $table->string('email');
        //     $table->string('type')->default("livechat");
        //     $table->bigInteger('app_user_id');
        //     $table->bigInteger('contact_details_id');
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
        // Schema::dropIfExists('chat_guests');
    }

}
