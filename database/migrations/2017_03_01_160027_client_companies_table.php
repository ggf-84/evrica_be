<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('responsible_user_id');
            $table->integer('category_id');
            $table->integer('domain_id')->default(0);
            $table->integer('employes_number')->default(1);
            $table->integer('fiscal_value')->default(0)->comment = "Cifra de afaceri";
            $table->integer('currency_id')->default(0);
            $table->string('comments')->default(null);
            $table->integer('visible')->default(1)->comment = "0-only creator, 1-visible for all";
            $table->integer('contact_details_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_companies');
    }
}
