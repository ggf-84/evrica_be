<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWsConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_connections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('socket');
            $table->integer('user_id');
            $table->integer('guest_id');
            $table->integer('company_id')->nullable();
            $table->string('window')->nullable();
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
        Schema::dropIfExists('ws_connections');
    }
}
