<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gerencia_id')->unsigned();
            $table->foreign('gerencia_id')->references('id')->on('gerencias')->onDelete('cascade');
            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
            $table->integer('ente_id')->unsigned();
            $table->foreign('ente_id')->references('id')->on('entes')->onDelete('cascade');
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
        Schema::dropIfExists('votantes');
    }
}
