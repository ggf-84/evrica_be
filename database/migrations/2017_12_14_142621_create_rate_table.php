<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('rate', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('tax_rate',13,2)->nullable();
            $table->integer('amount')->nullale();
            $table->integer('main_currency_id')->unsigned()->nullable()->comment('first currency to');
            $table->integer('second_currency_id')->unsigned()->nullable()->comment('second currency rate');
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

        Schema::dropIfExists('rate');
    }
}
