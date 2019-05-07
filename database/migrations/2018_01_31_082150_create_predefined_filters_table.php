<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredefinedFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predefined_filters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('entity', 25)->comment('name of entity - important');
            $table->string('filter',255)->comment('filter code for ex: &_filters[]=company_id=1|2|3&_filters[]=firstname-lk=*test* |user*');
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
        Schema::dropIfExists('predefined_filters');
    }
}
