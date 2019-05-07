<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDEStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_storage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();
            $table->integer('company_id')->unsigned()->nullable();
            $table->boolean('is_available')->default(1);
            $table->datetime('last_checked')->nullable();
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
        Schema::dropIfExists('de_storage');
    }
}
