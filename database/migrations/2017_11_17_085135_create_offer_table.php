<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->default(0);
            $table->string('title');
            $table->integer('status_id')->default(0);
            $table->integer('currency_id')->default(0);
            $table->float('sum', 8, 2)->default(0);
            $table->integer('responsible')->default(0);
            $table->date('post_date');
            $table->date('end_date');
            $table->integer('available_all')->default(0);
            $table->integer('client_id')->default(0);
            $table->integer('provider_id')->default(0);
            $table->text('description')->nullable();
            $table->text('conditions')->nullable();
            $table->text('comment')->nullable();
            $table->integer('company_id')->default(0);
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
        Schema::dropIfExists('offer');
    }
}
