<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id');
            $table->integer('checklist_id')->nullable();
            $table->integer('user_id');
            $table->integer('action_id');
            $table->timestamps();

            $table->index('user_id');
            $table->index('task_id');
            $table->index('action_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_activity');
    }
}
