<?php

class ClassifiedAdsTableSeeder extends Seeder
{
	 public function run()
	 {
		 	$classified_ads = array(

			array('id' => '1','main_category_id' => '1','sub_category_id' => '1','region_id' => '1','province_id' => '1','name' => 'Toyota Yaris','price' => '888.00','desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices enim id nunc viverra gravida. Nunc malesuada mi elit, ut adipiscing lectus consequat at. Donec eget augue malesuada felis eleifend dignissim nec ac neque. Nunc sollicitudin mi quis nulla egestas, eu dapibus ligula dictum. Sed adipiscing semper sagittis. Sed vitae posuere est, auctor rhoncus quam. Nam orci diam, congue in aliquam vitae, porttitor sed lectus. Phasellus rhoncus arcu ut laoreet ultricies. Vivamus imperdiet volutpat quam. Nullam eu erat ut nisl semper viverra elementum a nulla. Ut volutpat vitae neque eget suscipit. Fusce eget condimentum tellus.Proin placerat in arcu tempor interdum. Ut pellentesque bibendum ullamcorper. Suspendisse ullamcorper tempor placerat. Donec vel erat bibendum, hendrerit sem sed, gravida urna. Cras vulputate sed libero quis ullamcorper. Duis vulputate odio lorem, nec vehicula sapien pretium fringilla. Praesent non ipsum interdum massa congue tempus et et massa. Praesent congue velit enim, eu posuere orci semper et. Duis eget condimentum enim. Donec vel vestibulum dui, ultricies ornare ligula. Donec tempus erat ac tellus interdum venenatis. Praesent iaculis semper arcu quis vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut placerat, libero a tincidunt ultrices, tortor diam elementum velit, et fringilla ante felis at dui.','created_at' => new datetime() , 'updated_at' => new datetime());

			);

		 	DB::table('classified_ads')->insert($classified_ads);

	 }
}
?>