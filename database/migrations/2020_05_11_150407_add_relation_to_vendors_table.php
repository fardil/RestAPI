<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->integer('id_user')->unsigned()->change();
            $table->foreign('id_user')->references('id_user')->on('user')
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
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropForeign('vendors_id_user_foreign');
        });

        Schema::table('vendors', function (Blueprint $table) {
            $table->dropIndex('vendors_id_user_foreign');
        });
        
        Schema::table('vendors', function (Blueprint $table) {
            $table->integer('id_user')->change();
        });
    }
}
