<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmileysTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Schema::create('chat_smileys', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('code');
        //     $table->string('file');
        //     $table->integer('addBy')->comment('user that added the smileys')->default(0);
        //     $table->integer('company_id')->comment('company id of author')->default(0);
        //     $table->integer('is_default')->comment('is default smile')->default(0);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('chat_smileys');
    }

}
