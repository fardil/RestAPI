<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            //$table->string('update_pesanan',);
            //$table->integer('id_baju')->unsigned();
            $table->integer('quantity_s');
            $table->integer('quantity_m');
            $table->integer('quantity_l');
            $table->integer('quantity_xl');
            $table->integer('quantity_xxl');
            //$table->foreign('id_baju')->references('id_baju')->on('bajus'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
