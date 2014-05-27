<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Regions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions',function($table){

			$table->bigIncrements('id');
			$table->string('name',100);
			$table->timestamps();

			//Settings
			/*$table->primary('id');*/
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
		Schema::dropIfExists('regions');
	}

}
