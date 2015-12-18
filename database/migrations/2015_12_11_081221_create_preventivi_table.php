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
            $table->binary('data');
            $table->string('id azienda');
            $table->string('id problema');
            $table->text('descrizione');
            $table->decimal('prezzo', 6, 2);
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
        Schema::drop('preventivi');
    }
}
