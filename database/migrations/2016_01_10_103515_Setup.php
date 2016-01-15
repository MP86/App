<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('company_category', function(Blueprint $table)
    	{
    		$table->increments('id');
    		 
    		$table->integer('company_id')->unsigned();
    		$table->integer('category_id')->unsigned();
    		 
    		$table->timestamps();
    	});
    	 
    	Schema::create('problem_category', function(Blueprint $table)
    	{
    		$table->increments('id');
    		 
    		$table->integer('problem_id')->unsigned();
    		$table->integer('category_id')->unsigned();
    		 
    		$table->timestamps();
    	});
    	 
    	Schema::create('problem_estimate', function(Blueprint $table)
    	{
    		$table->increments('id');
    		 
    		$table->integer('problem_id')->unsigned();
    		$table->integer('estimate_id')->unsigned();
    		 
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
    	Schema::drop('company_category');
    	Schema::drop('problem_category');
    	Schema::drop('problem_estimate');
    }
}
