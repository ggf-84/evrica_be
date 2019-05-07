<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('mime')->nullable();
            $table->integer('size')->nullable();
            $table->string('path')->nullable();
            $table->string('thumb_path')->nullable();
            $table->integer('task_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->timestamps();

            $table->index('name');
            $table->index('company_id');
            $table->index('task_id');

//            $table->foreign('task_id')->references('id')->on('tasks');
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
        Schema::dropIfExists('task_attachments');
    }
}
