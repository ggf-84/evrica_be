<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('background')->nullable();
            $table->integer('attachment_id')->unsigned()->nullable(); //id of image attachment used as cover
            $table->integer('list_id')->unsigned();
            $table->float('priority');
            $table->timestamps();

            $table->index('title');
            $table->index('user_id');
            $table->index('company_id');
            $table->index('list_id');

//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
