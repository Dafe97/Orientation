<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->unsignedBigInteger("uni_id");
            $table->unsignedBigInteger("unblocks_id");
            $table->foreign('uni_id')->references('id_uni')->on('universities');
            $table->foreign('unblocks_id')->references('id_unblocks')->on('unblocks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->dropForeign(['uni_id,unblocks_id']);
        });
    }
}
