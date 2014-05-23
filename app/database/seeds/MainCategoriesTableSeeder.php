<?php

class MainCategoriesTableSeeder extends Seeder
{
	 public function run()
	 {
		 	$main_categories = array(
			  array('id' => '1','name' => 'Vehicles','created_at' => new datetime() ,'updated_at' => new datetime()),
			  array('id' => '2','name' => 'Properties','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '3','name' => 'Electronics','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '4','name' => 'Home & Personal Items','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '5','name' => 'Leisure/Sports/Hobbies','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '6','name' => 'Business 2 Business','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '7','name' => 'Jobs/Services','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '8','name' => 'Travel','created_at' => new datetime(),'updated_at' => new datetime()),
			);

		 	DB::table('main_categories')->insert($main_categories);

	 }
}
?>