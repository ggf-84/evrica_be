<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.e
     *
     * @return void
     */
    public function up()
    {

        // notification

        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned()->nullable();
            $table->string('title')->nullable();
            $table->string('message')->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            $table->boolean('is_system')->default('0');
            $table->boolean('is_chat')->default('0');
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
        Schema::dropIfExists('notification');
    }
}
