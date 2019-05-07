<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address')->nullable();
            $table->integer('domain_id')->unsigned()->nullable();
            $table->integer('visitor_id')->unsigned()->nullable();
            $table->string('page_url')->nullable();
            $table->integer('page_views')->default('0');
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

        Schema::dropIfExists('visits');
    }
}
