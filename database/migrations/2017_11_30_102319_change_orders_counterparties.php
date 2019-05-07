<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOrdersCounterparties extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // Schema::table('order', function (Blueprint $table) {
        //     $table->integer('counterpart_id')->default(0);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        // Schema::table('order', function (Blueprint $table) {
        //     $table->dropColumn('type');
        // });
    }

}
