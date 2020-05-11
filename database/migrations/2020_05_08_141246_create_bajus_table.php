<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajus', function (Blueprint $table) {
            $table->increments('id_baju');
            $table->string('jenis_baju');
            $table->integer('id_vendor')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_vendor')->references('id_vendor')->on('vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bajus');
    }
}
