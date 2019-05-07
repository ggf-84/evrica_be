<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('domain_records', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('domain_id')->nullable();
          $table->string('name')->nullable();
          $table->string('type',6)->nullable();
          $table->string('content')->nullable();
          $table->integer('ttl')->nullable();
          $table->integer('prio')->nullable();
          $table->integer('company_id')->unsigned()->nullable();
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
        Schema::dropIfExists('domain_records');
    }
}
