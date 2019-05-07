<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_items', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->boolean('is_done')->default(0);
            $table->integer('checklist_id')->unsigned();
            $table->float('priority');
            $table->timestamps();

            $table->index('checklist_id');

//            $table->foreign('checklist_id')->references('id')->on('task_checklists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_items');
    }
}
