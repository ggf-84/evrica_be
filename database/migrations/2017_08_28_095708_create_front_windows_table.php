<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontWindowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_windows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->default(0)->comment('id of window group')->nullable();
            $table->string('identifier')->comment('unique identifier in format window_name_min-width_max-width like: add_order_10_20');
            $table->string('name')->comment('window name');
            $table->integer('min_width')->default(0)->comment('min width in cm');
            $table->integer('max_width')->default(0)->comment('max width in cm');
            $table->integer('min_height')->default(0)->comment('min height in cm')->nullable();
            $table->integer('max_height')->default(0)->comment('max height in cm')->nullable();
            $table->longText('metadata');
            $table->unique('identifier');
            //$table->integer('group_id')->unsigned()->change();
            //$table->foreign('group_id')->references('id')->on('window_groups')->onDelete('cascade');
            $table->longText('edited_metadata')->nullable();
            $table->tinyInteger('publish')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('front_windows');
    }
}
