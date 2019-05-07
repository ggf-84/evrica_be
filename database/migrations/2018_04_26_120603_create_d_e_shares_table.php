<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDESharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_share', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('password')->nullable();
            $table->string('token')->nullable();
            $table->string('email')->nullable();
            $table->integer('department_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('counterparty_id')->unsigned()->nullable();
            $table->integer('item_id')->unsigned()->nullable();
            $table->integer('share_type_id')->unsigned()->nullable();
            $table->integer('owner_id')->unsigned()->nullable()->comment('owner');
            $table->integer('initiator_id')->unsigned()->nullable()->comment('who shared file');
            $table->boolean('is_mailed')->default(0);
            $table->boolean('is_accepted')->default(0);
            $table->boolean('is_available')->default(1);
            $table->boolean('is_external')->default(0);
            $table->datetime('expiration');
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
        Schema::dropIfExists('de_share');
    }
}
