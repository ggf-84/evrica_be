<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('extra_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('provider_id')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->default(0);
            $table->string('provider_type')->nullable();
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
        Schema::dropIfExists('extra_accounts');
    }
}
