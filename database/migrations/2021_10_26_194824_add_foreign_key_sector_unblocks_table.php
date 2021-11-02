<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySectorUnblocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sector_unblocks', function (Blueprint $table) {
            $table->unsignedBigInteger("sectors_id");
            $table->unsignedBigInteger("unblocks_id");
            $table->foreign('sectors_id')->references('id_sectors')->on('sectors');
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
        Schema::table('sector_unblocks', function (Blueprint $table) {
            $table->dropForeign(['sectors_id','unblocks_id']);
        });
    }
}
