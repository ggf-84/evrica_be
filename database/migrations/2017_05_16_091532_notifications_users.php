<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotificationsUsers extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('notifications_users', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('notification_id')->unsigned()->nullable();
           $table->integer('user_id')->unsigned()->nullable();
           $table->boolean('active')->default('1');
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
         Schema::dropIfExists('notifications_users');
    }

}
