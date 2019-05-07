<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address')->nullable();
            $table->integer('language_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable()->comment('if visitor is system user , user_id will be !=null');
            $table->string('device')->nullable();
            $table->string('browser')->nullable();
            $table->string('referer')->nullable();
            $table->boolean('is_mobile')->default('0');
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

        Schema::dropIfExists('visitors');
    }
}
