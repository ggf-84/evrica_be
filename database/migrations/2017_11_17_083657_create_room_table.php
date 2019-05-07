<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('room', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title');
        //     $table->integer('status')->default(0);
        //     $table->integer('administrator')->default(0);
        //     $table->integer('company_id')->default(0);
        //     $table->integer('public')->default(0)->comment('0 = private (with invites), 1 = public ');
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
        // Schema::dropIfExists('room');
    }
}
