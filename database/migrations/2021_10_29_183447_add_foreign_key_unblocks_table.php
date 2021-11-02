<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUnblocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unblocks', function (Blueprint $table) {
            $table->string("levels",20);
            $table->foreign('levels')->references('contents')->on('levels');
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
            $table->dropForeign(['level']);
        });
    }
}
