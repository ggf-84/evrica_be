<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product', function (Blueprint $table) {
          $table->increments('id');

          // $table->integer('currency_id')->unsigned()->nullable();

          $table->integer('unit_id')->unsigned()->nullable();

          $table->integer('status_id')->unsigned()->nullable();

          $table->decimal('price',13,2)->nullable();

          $table->integer('category_id')->unsigned()->nullable();

          $table->string('preview_image')->nullable();

          $table->string('full_image')->nullable();

          $table->boolean('active')->default(1);

          $table->integer('company_id')->unsigned()->nullable();

          $table->boolean('tax_included')->default(0);

          $table->decimal('tax_rate',13,2)->nullable();

          $table->integer('in_stock')->unsigned()->nullable();

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
        Schema::dropIfExists('product');
    }
}
