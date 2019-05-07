<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('order_products', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('order_id')->unsigned()->nullable();

          $table->integer('product_id')->unsigned()->nullable();

          $table->decimal('quantity', 13, 2)->nullable();

          $table->decimal('price', 13, 2)->nullable();

          $table->integer('unit_id')->unsigned()->nullable();

          $table->boolean('tax_included')->default(0);

          $table->decimal('tax_rate',15,2)->nullable();

          $table->decimal('total', 13, 2)->nullable();

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
        Schema::dropIfExists('order_products');
    }

}
