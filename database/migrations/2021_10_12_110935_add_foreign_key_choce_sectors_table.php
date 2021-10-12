<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyChoceSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('choce_sectors', function (Blueprint $table) {
            $table->unsignedBigInteger("users_id");
            $table->unsignedBigInteger("unblocks_id");
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::table('choce_sectors', function (Blueprint $table) {
            $table->dropForeign(['users_id,unblocks_id']);
        });
    }
}
