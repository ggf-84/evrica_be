<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Counterparties extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('counterparty', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstname');
          $table->string('lastname')->nullable();
          $table->string('email')->nullable();

          $table->string('address')->nullable();
          $table->string('postal_code')->nullable();
          $table->string('phone')->nullable();

          $table->integer('country_id')->unsigned()->nullable();
          $table->integer('state_id')->unsigned()->nullable();

          $table->integer('company_id')->unsigned()->nullable()->default(0);

          $table->integer('type_id')->unsigned()->nullable()->default(0);

          $table->integer('auth_id')->unsigned()->nullable()->default(0)->comment('User id assigned to counterpart, used for auth');

          $table->integer('group_id')->unsigned()->nullable();

          $table->boolean('active_tax')->default(1);

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('counterparty');
    }

}
