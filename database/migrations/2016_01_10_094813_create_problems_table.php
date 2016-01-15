<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->longText('body');
            $table->string('address');
            $table->integer('number');
            $table->integer('cap');
            $table->string('slug')->index();
             
            $table->boolean('is_published');
            $table->dateTime('published_at');
             
            $table->string('meta_keys');
            $table->string('meta_description');
             
            $table->integer('user_id')->unsigned()->index();
            
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
        Schema::drop('problem');
    }
}
