<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDEItemCachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_item_cache', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('extension')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('filename')->nullable();
            $table->string('hash')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('counterparty_id')->unsigned()->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('size')->nullable();
            $table->integer('item_type_id')->unsigned()->nullable();
            $table->integer('mime_type_id')->unsigned()->nullable();
            $table->integer('storage_id')->unsigned()->nullable();
            $table->boolean('is_shared')->default(0);
            $table->boolean('has_thumbnail')->default(0);
            $table->datetime('mtime');
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
        Schema::dropIfExists('de_item_cache');
    }
}
