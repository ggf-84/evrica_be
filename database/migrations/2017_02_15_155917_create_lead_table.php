<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lead', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->text('description')->nullable();

            $table->integer('status_id')->unsigned()->nullable();

            $table->decimal('amount', 15, 2)->nullable();

            $table->integer('currency_id')->unsigned()->nullable();

            // $table->integer('position_id')->unsigned()->nullable();

            // $table->integer('salutation_id')->unsigned()->nullable();

            // $table->integer('contact_id')->unsigned()->nullable();

            $table->integer('user_id')->unsigned()->nullable()->comment('id of responsible person (reporter)');

            $table->integer('counterparty_id')->unsigned()->nullable()->comment('reffer to somebody');

            $table->integer('company_id')->unsigned()->nullable();

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
        Schema::dropIfExists('lead');
    }
}
