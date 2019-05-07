<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('quote', function (Blueprint $table) {
          $table->increments('id');

          $table->string('title');

          $table->decimal('amount', 13, 2)->nullable();

          $table->integer('status_id')->unsigned()->nullable();

          $table->integer('currency_id')->unsigned()->nullable();

          $table->integer('user_id')->unsigned()->nullable()->comment('id of responsible person (reporter)');

          $table->datetime('due_at')->nullable();

          $table->boolean('available_all')->default(1);

          $table->integer('counterparty_id')->unsigned()->nullable()->comment('reffer to somebody');

          $table->text('content')->nullable();

          $table->text('conditions')->nullable();

          // $table->integer('currency_id')->unsigned()->nullable();

          $table->text('comment')->nullable();

          $table->integer('company_id')->unsigned()->nullable();

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

        Schema::dropIfExists('quote');
    }
}
