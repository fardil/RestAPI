<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToBajusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bajus', function (Blueprint $table) {
            $table->integer('id_user')->unsigned()->change();
            $table->foreign('id_user')->references('id_user')->on('user')
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
        Schema::table('bajus', function (Blueprint $table) {
            $table->dropForeign('bajus_id_user_foreign');
        });

        Schema::table('bajus', function (Blueprint $table) {
            $table->dropIndex('bajus_id_user_foreign');
        });
        
        Schema::table('bajus', function (Blueprint $table) {
            $table->integer('id_user')->change();
        });

        Schema::table('bajus', function (Blueprint $table) {
            $table->dropForeign('bajus_id_vendor_foreign');
        });

        Schema::table('bajus', function (Blueprint $table) {
            $table->dropIndex('bajus_id_vendor_foreign');
        });
        
        Schema::table('bajus', function (Blueprint $table) {
             $table->integer('id_vendor')->change();
        });
    }
}
