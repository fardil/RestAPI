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
        Schema::table('histories', function (Blueprint $table) {
            $table->dropForeign('histories_id_transaction_foreign');
        });

        Schema::table('histories', function (Blueprint $table) {
            $table->dropIndex('histories_id_transaction_foreign');
        });
        
        Schema::table('histories', function (Blueprint $table) {
            $table->integer('id_transaction')->change();
        });

        Schema::table('histories', function (Blueprint $table) {
            $table->dropForeign('histories_id_vendor_foreign');
        });

        Schema::table('histories', function (Blueprint $table) {
            $table->dropIndex('histories_id_vendor_foreign');
        });
        
        Schema::table('histories', function (Blueprint $table) {
            $table->integer('id_vendor')->change();
        });
    }
}
