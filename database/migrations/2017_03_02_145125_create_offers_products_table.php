<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('offers_products', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('offer_id')->default(0);
        //     $table->integer('product_id')->default(0);
        //     $table->integer('quantity')->default(0);
        //     $table->float('price', 8, 2)->default(0);
        //     $table->integer('um_id')->default(0);
        //     $table->float('total', 8, 2)->default(0);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('offers_products');
    }

}
