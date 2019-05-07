<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('domains', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('master',128)->nullable();
          $table->integer('last_check')->nullable();
          $table->string('type',6);
          $table->integer('notified_serial')->nullable();
          $table->string('account',40)->nullable();
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
        Schema::dropIfExists('domains');
    }
}
