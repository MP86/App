<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreventiviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preventivi', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_scadenza');
            $table->unsignedInteger('azienda_id');
            $table->unsignedInteger('problema_id');
			$table->binary('pdf');
            $table->text('descrizione');
            $table->decimal('prezzo', 6, 2);
            $table->timestamps();
            $table->foreign('azienda_id')->references('id')->on('utenti');
            $table->foreign('problema_id')->references('id')->on('problemi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preventivi');
    }
}
