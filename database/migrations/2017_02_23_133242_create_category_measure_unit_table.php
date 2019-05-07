<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMeasureUnitTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // delete
        // Schema::create('measure_unit', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title')->default('');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        // Schema::dropIfExists('measure_unit');
    }

}
