<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('transaction', function (Blueprint $table) {

            $table->increments('id');

            // $table->integer('card_id')->unsigned()->nullable();

            $table->decimal('amount',13,2)->nullable();

            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();

            $table->integer('counterparty_id')->unsigned()->nullable();

            $table->integer('currency_id')->unsigned()->nullable();

            $table->string('token')->nullable();

            $table->boolean('withdrawn')->default('0');

            $table->integer('gateway_id')->unsigned()->nullable();

            $table->datetime('created_at')->nullable();
            // $table->timestamps();

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

        Schema::dropIfExists('transaction');
    }
}
