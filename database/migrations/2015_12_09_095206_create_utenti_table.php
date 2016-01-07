<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utenti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('ruolo');
            $table->rememberToken();
            $table->timestamps();
        });
        
        	Schema::create('aziende', function (Blueprint $table) {
        		$table->unsignedInteger('utente_id');
        		$table->string('nome');
        		$table->string('tipo');
        		$table->string('indirizzo');
        		$table->integer('CAP');
        		$table->timestamps();
        		$table->primary('utente_id');
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
        Schema::drop('utenti');
        Schema::drop('aziende');
    }
}
