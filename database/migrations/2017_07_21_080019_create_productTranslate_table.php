<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTranslateTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('product', function(Blueprint $table) {
        //     $table->dropColumn('title');
        //     $table->dropColumn('description');
        // });

        Schema::create('product_i18n', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->string('description')->nullable();

            $table->integer('product_id')->unsigned()->nullable();

            $table->integer('language_id')->unsigned()->nullable();

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
        Schema::dropIfExists('product_i18n');
    }

}
