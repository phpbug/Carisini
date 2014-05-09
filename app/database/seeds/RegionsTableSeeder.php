<?php

class RegionsTableSeeder extends Seeder
{
	 public function run()
	 {
		 	$regions = array(
			  array('id' => '1','name' => 'Ilocos Region','created_at' => '2014-05-04 05:30:00','updated_at' => '2014-05-04 05:30:00'),
			  array('id' => '2','name' => 'Cagayan Region','created_at' => '2014-05-04 05:30:00','updated_at' => '2014-05-04 05:30:00'),
			  array('id' => '3','name' => 'Central Luzon','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '4','name' => 'NCR - Metro Manila','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '5','name' => 'CALABARZON','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '6','name' => 'MIMAROPA','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '7','name' => 'Bicol','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '8','name' => 'Western Visayas','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '9','name' => 'Cebu & Central Visayas','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '10','name' => 'Eastern Visayas','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '11','name' => 'Zamboanga Peninsula','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '12','name' => 'Northern Mindanao','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '13','name' => 'Davao Region ','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '14','name' => 'SOCSARGEN','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '15','name' => 'CARAGA','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28'),
			  array('id' => '16','name' => 'ARMM','created_at' => '2014-05-04 10:35:28','updated_at' => '2014-05-04 10:35:28')
			);

		 	DB::table('regions')->insert($regions);

	 }
}
?>