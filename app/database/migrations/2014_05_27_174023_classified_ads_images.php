<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassifiedAdsImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('classified_ads_images',function($table){

			$table->bigIncrements('id');
			$table->bigInteger('classified_ads_id');
			$table->binary('image');
			$table->string('ext');
			$table->string('width');
			$table->string('height');
			$table->timestamps();

			$table->index('classified_ads_id');

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
		Schema::dropIfExists('classified_ads_images');
	}

}
