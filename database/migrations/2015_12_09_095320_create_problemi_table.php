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
            $table->string('id utente');
            $table->string('Nome prolema');
            $table->string('Tipo di problema');
            $table->text('Descrizione problema');
            $table->string('Dove');
            $table->integer('CAP');
            $table->rememberToken();
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
        Schema::drop('problemi');
    }
}
