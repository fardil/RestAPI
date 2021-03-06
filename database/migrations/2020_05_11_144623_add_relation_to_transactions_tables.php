<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToTransactionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('id_user')->unsigned()->change();
            $table->foreign('id_user')->references('id_user')->on('user')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_baju')->unsigned()->change();
            $table->foreign('id_baju')->references('id_baju')->on('bajus')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_id_user_foreign');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropIndex('transactions_id_user_foreign');
        });
        
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('id_user')->change();
        });
        
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_id_baju_foreign');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropIndex('transactions_id_baju_foreign');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('id_baju')->change();
        });
    }
}
