<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShardsServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('shards_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('shard_id')->unsigned()->nullable();
            $table->string('service_type')->nullable();
            $table->string('service_ip')->nullable();
            $table->string('service_database')->nullable();
            $table->string('service_username')->nullable();
            $table->string('service_password')->nullable();
            $table->string('service_port')->nullable();
            $table->string('service_url')->nullable();
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
        Schema::dropIfExists('shards_services');
    }
}
