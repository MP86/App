<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('utente_id');
            $table->string('nome');
            $table->string('foto');
            $table->string('tipo');
            $table->text('descrizione');
            $table->string('indirizzo');
            $table->integer('CAP');
            $table->timestamps();
            $table->foreign('utente_id')->references('id')->on('utenti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('problemi');
    }
}
