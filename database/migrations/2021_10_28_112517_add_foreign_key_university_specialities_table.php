<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyUniversitySpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('university_specialities', function (Blueprint $table) {
                $table->unsignedBigInteger("univesity_id");
                $table->unsignedBigInteger("speciality_id");
                $table->foreign('univesity_id')->references('id_uni')->on('universities');
                $table->foreign('speciality_id')->references('id')->on('specialities');
            });
    }

/**
 * Reverse the migrations.
 *
 * @return void
 */
    public function down()
    {
        Schema::table('university_specialities', function (Blueprint $table) {
            $table->dropForeign(['univesity_id,speciality_id']);
        });
    }
}
