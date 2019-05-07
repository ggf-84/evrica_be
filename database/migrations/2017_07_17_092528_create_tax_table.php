<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        //Drop old vat table
        // Schema::dropIfExists('vat');

        //Create tax_rule table
        // Schema::create('tax_rule', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title');
        //     $table->integer('product_category_id')->default(0)->comment('what product_category apply tax_rule');
        //     $table->integer('country_id')->default(0);
        //     $table->integer('region_id')->default(0);
        //     $table->float('tax_rate')->default(0);
        //     $table->integer('order')->comment('sort by this field');
        //     $table->integer('company_id')->default(0);
        //     $table->timestamps();
        // });

        //Rename old named table
        // Schema::rename('category_product', 'product_category');

        //Product category table
        // Schema::table('product_category', function (Blueprint $table) {
        //     $table->float('tax')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tax_rules');
    }

}
