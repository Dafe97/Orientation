<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColomnUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->id();
            $table->string('web_url',50)->unique()->nullable();
            $table->string('github',50)->unique()->nullable();
            $table->string('twitter',50)->unique()->nullable();
            $table->string('instagram',50)->unique()->nullable();
            $table->string('facebook',50)->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('github','web','twitter','instagram','facebook');
        });
    }
}
