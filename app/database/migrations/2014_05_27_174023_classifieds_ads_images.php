<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassifiedsAdsImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('classifieds_ads_images',function($table){

			$table->bigIncrements('id');
			$table->bigInteger('classifieds_ads_id');
			$table->binary('image');
			$table->string('ext');
			$table->string('width');
			$table->string('height');
			$table->timestamps();

			$table->index('classifieds_ads_id');

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
		Schema::dropIfExists('classifieds_ads_images');
	}

}
