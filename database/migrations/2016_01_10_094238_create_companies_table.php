<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('phone');
            $table->string('ruolo');
            $table->string('category');
            $table->string('address');
            $table->integer('number');
            $table->integer('cap');
            
            $table->boolean('is_published');
            $table->dateTime('published_at');
             
            $table->string('meta_keys');
            $table->string('meta_description');
            
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
        Schema::drop('company');
    }
}
