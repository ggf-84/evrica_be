<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // visitors

        // Schema::create('visitor', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->integer('ip')->nullable();
        //     $table->string('domain')->nullable();
        //     $table->string('first_page')->nullable();
        //     $table->integer('visits')->default(1);
        //     $table->string('country')->nullable();
        //     $table->string('city')->nullable();
        //     $table->string('region')->nullable();
        //     $table->string('language')->nullable();
        //     $table->string('browser')->nullable();
        //     $table->string('browser_version')->nullable();
        //     $table->string('os')->nullable();
        //     $table->string('os_version')->nullable();
        //     $table->integer('mobile')->nullable();
        //     $table->string('fingerprint')->nullable();
        //     $table->integer('cookie_enabled')->default(0);
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
        Schema::dropIfExists('visitor');
    }
}
