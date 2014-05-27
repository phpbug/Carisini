<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_categories',function($table){

			$table->bigIncrements('id');
			$table->bigInteger('main_category_id');
			$table->string('name',100);
			$table->timestamps();

			$table->index('name');
			/*$table->foreign('category_id')->references('id')->on('categories');*/
			$table->index('main_category_id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  Schema::dropIfExists('sub_categories');
	}

}
