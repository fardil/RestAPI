<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id_history')->unsigned();
            $table->integer('id_vendor')->unsigned();
            $table->integer('id_transaction')->unsigned();
            $table->string('review_pesanan');
            $table->foreign('id_vendor')->references('id_vendor')->on('vendor');
            $table->foreign('id_transaction')->references('id_transaction')->on('transactions');
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
        Schema::dropIfExists('histories');
    }
}
