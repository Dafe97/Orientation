<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUnblockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unblocks', function (Blueprint $table) {
            $table->unsignedBigInteger("sectors_id");
            $table->foreign('sectors_id')->references('id_sectors')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unblocks', function (Blueprint $table) {
            $table->dropForeign(['sectors_id']);
        });
    }
}
