<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->binary('pdf');
            $table->longText('body');
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->string('slug')->index();
             
            $table->boolean('is_published');
            $table->dateTime('published_at');
             
            $table->string('meta_keys');
            $table->string('meta_description');
             
            $table->integer('company_id')->unsigned()->index();
             
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
        Schema::drop('estimate');
    }
}
