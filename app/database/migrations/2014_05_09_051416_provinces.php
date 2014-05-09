<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Provinces extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provinces',function($table){

			$table->bigIncrements('id');
			$table->bigInteger('region_id');
			$table->string('name',100);
			$table->timestamps();

			//Settings
			/*$table->primary('id');*/
			/*$table->foreign('region_id')->references('id')->on('regions');*/
			$table->index('region_id');
			$table->index('name');	

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provinces');
	}

}
