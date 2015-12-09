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
            $table->string('Nome prolema');
            $table->string('Tipo di problema');
            $table->string('Descrizione problema');
            $table->string('Dove');
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
