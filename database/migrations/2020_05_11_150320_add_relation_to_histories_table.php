<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('histories', function (Blueprint $table) {
            $table->integer('id_transaction')->unsigned()->change();
            $table->foreign('id_transaction')->references('id_transaction')->on('transactions')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_vendor')->unsigned()->change();
            $table->foreign('id_vendor')->references('id_vendor')->on('vendors')
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
            $table->dropForeign('transactions_id_transaction_foreign');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropIndex('transactions_id_transaction_foreign');
        });
        
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('id_transaction')->change();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_id_vendor_foreign');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropIndex('transactions_id_vendor_foreign');
        });
        
        Schema::table('transactions', function (Blueprint $table) {
            $table->integer('id_vendor')->change();
        });
    }
}
