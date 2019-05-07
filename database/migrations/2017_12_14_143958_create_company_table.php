<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('street_address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('email')->nullable();
            $table->string('vatID')->nullable();
            $table->string('phone')->nullable();
            $table->decimal('revenue', 15, 2)->nullable();
            $table->integer('amount')->unsigned()->nullable()->comment('employees amount');
            $table->integer('country_id')->unsigned()->nullable();
            // $table->integer('contact_id')->unsigned()->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('shard_id')->unsigned()->nullable();
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

        Schema::dropIfExists('company');
    }
}
