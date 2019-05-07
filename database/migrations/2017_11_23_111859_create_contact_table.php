<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('contact', function (Blueprint $table) {
          $table->increments('id');

          $table->string('firstname');
          $table->string('lastname')->nullable();

          $table->string('phone')->nullable();

          $table->string('email')->nullable();

          $table->string('street_address')->nullable();

          $table->integer('country_id')->unsigned()->nullable()->default(0);

          $table->integer('state_id')->unsigned()->nullable()->default(0);

          $table->string('postal_code')->nullable();

          $table->integer('salutation_id')->unsigned()->nullable();

          $table->integer('position_id')->unsigned()->nullable();

          $table->integer('lead_id')->unsigned()->nullable();

          $table->integer('company_id')->unsigned()->nullable()->default(0);

          $table->integer('counterparty_id')->unsigned()->nullable()->default(0);

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

        Schema::dropIfExists('contact');
    }
}
