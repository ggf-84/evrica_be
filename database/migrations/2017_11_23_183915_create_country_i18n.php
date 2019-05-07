<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryI18n extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // delete
        // Schema::create('country_i18n', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title');
        //     $table->string('description')->nullable();
        //     $table->integer('country_id')->unsigned()->nullable();
        //     $table->integer('language_id')->unsigned()->nullable();
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
        //

        // Schema::dropIfExists('country_i18n');
    }
}
