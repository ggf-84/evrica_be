<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Schema::dropIfExists('invoices');
        // Schema::dropIfExists('invoices_offers');
        // Schema::dropIfExists('invoices_orders');

        Schema::create('invoice', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');

            $table->string('description')->nullable();

            $table->integer('status_id')->unsigned()->nullable();

            $table->string('comment')->nullable()->comment('special comment for invoice can be applied to cancelation');

            $table->integer('user_id')->unsigned()->nullable()->comment('id of responsible person (reporter)');

            $table->integer('order_id')->unsigned()->nullable();

            $table->integer('quote_id')->unsigned()->nullable();

            $table->string('invoice_no')->nullable()->unique()->comment('unique invoice number');

            $table->dateTime('sent_at')->nullable()->comment('invoice sent date');

            $table->dateTime('paid_at')->nullable();

            $table->integer('currency_id')->unsigned()->nullable();

            $table->dateTime('due_at')->nullable()->comment('pay before date');

            $table->integer('counterparty_id')->unsigned()->nullable()->comment('reffer to somebody');

            $table->integer('company_id')->unsigned()->nullable();

            $table->integer('template_id')->unsigned()->nullable();

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
        Schema::dropIfExists('invoice');
    }
}
