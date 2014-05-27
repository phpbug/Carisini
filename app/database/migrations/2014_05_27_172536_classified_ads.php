<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassifiedAds extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('classified_ads',function($table){

			$table->bigIncrements('id');
			$table->bigInteger('main_category_id');
			$table->bigInteger('sub_category_id');
			$table->bigInteger('region_id');
			$table->bigInteger('province_id');
			$table->string('name',100);
			$table->decimal('price',5, 2);
			$table->longText('desc');
			$table->timestamps();

			//Indexing
			$table->index('main_category_id');
			$table->index('sub_category_id');
			$table->index('region_id');
			$table->index('province_id');
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
		//
		Schema::dropIfExists('classified_ads');
	}

}
