<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order', function (Blueprint $table) {

          $table->increments('id');

          $table->string('title');

          $table->string('description')->nullable();

          $table->string('order_no')->nullable()->unique();

          $table->decimal('amount', 13, 2)->nullable();

          $table->integer('status_id')->unsigned()->nullable();

          $table->integer('currency_id')->unsigned()->nullable();

          $table->boolean('quote')->default(0);

          $table->integer('quote_id')->unsigned()->nullable();

          $table->integer('counterparty_id')->unsigned()->nullable()->comment('reffer to somebody');

          $table->integer('company_id')->unsigned()->nullable();

          $table->integer('type_id')->unsigned()->nullable();

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
        Schema::dropIfExists('order');
    }
}
