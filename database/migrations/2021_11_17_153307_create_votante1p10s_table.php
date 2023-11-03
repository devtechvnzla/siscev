<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotante1p10sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votante1p10s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ente_id')->unsigned();
            $table->foreign('ente_id')->references('id')->on('entes')->onDelete('cascade');
            $table->integer('personal_p_id')->unsigned();
            $table->foreign('personal_p_id')->references('id')->on('personal1p10s')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->smallInteger('confirmed')->nullable()->default(0);
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
        Schema::dropIfExists('votante1p10s');
    }
}
