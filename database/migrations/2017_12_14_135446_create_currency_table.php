<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('currency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix')->nullable();
            $table->string('sign')->nullable()->comment('EUR UAH PLN etc');
            $table->string('suffix')->nullable();
            $table->integer('country_id')->unsigned()->nullable()->default(0);
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

        Schema::dropIfExists('currency');
    }
}
