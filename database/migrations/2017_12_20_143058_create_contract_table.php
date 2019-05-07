<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('contract', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('description')->nullable();

            $table->decimal('total_price',13,2)->nullable();

            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();

            $table->boolean('active')->default(1);

            $table->integer('company_id')->unsigned()->nullable();
            $table->integer('counterparty_id')->unsigned()->nullable();

            $table->integer('currency_id')->unsigned()->nullable();

            $table->integer('invoice_id')->unsigned()->nullable();
            $table->integer('order_id')->unsigned()->nullable();

            $table->integer('quote_id')->unsigned()->nullable();

            $table->integer('type_id')->unsigned()->nullable();

            $table->integer('user_id')->unsigned()->nullable();

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

        Schema::dropIfExists('contract');
    }
}
