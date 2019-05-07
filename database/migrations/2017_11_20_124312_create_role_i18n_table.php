<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('role_i18n', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->nullable()->default(0);
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('language_id')->unsigned()->nullable();
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
        Schema::dropIfExists('role_i18n');
    }
}
