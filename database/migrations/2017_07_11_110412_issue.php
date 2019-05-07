<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Issue extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * Remove old tables if exists
         */
        // Schema::dropIfExists('events');
        // Schema::dropIfExists('event_type');
        // Schema::dropIfExists('tasks');
        // Schema::dropIfExists('task_status');

        Schema::create('issue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->integer('project_id')->default(0);
            $table->tinyInteger('is_important')->default(0)->comment('Is important 1=yes,0=no');
            $table->integer('type_id')->default(0)->comment('Type of issue Task/Event, etc...');
            $table->integer('status_id')->default(0)->comment('Status for issue');
            $table->integer('responsible')->default(0)->comment('Responsible user_id');
            $table->integer('created_by')->default(0)->comment('Created user_id ');
            $table->integer('company_id')->default(0);
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
        Schema::dropIfExists('issue');
    }

}
