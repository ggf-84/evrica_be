<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('notification_type', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('title');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        // Schema::dropIfExists('notification_type');

    }
}
