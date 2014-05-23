<?php

class SubCategoriesTableSeeder extends Seeder
{
	 public function run()
	 {
		 	$sub_categories = array(
			  array('id' => '1','main_category_id'=>'1','name' => 'Cars','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '2','main_category_id'=>'1','name' => 'Motorcycles','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '3','main_category_id'=>'1','name' => 'Car Accessories & Parts','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '4','main_category_id'=>'1','name' => 'Motorcycle Accessories & Parts','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '5','main_category_id'=>'1','name' => 'Other Accessories & Parts','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '6','main_category_id'=>'1','name' => 'Other Vehicles','created_at' => new datetime(),'updated_at' => new datetime()),

			  array('id' => '7','main_category_id'=>'2','name' => 'Apartments','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '8','main_category_id'=>'2','name' => 'Houses','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '9','main_category_id'=>'2','name' => 'Commercial Properties','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '10','main_category_id'=>'2','name' => 'Land','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '11','main_category_id'=>'2','name' => 'Rooms','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '12','main_category_id'=>'2','name' => 'New Properties','created_at' => new datetime(),'updated_at' => new datetime()),


			  array('id' => '13','main_category_id'=>'3','name' => 'Mobile Phones/Gadgets ','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '14','main_category_id'=>'3','name' => 'Phone/Gadget Accessories','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '15','main_category_id'=>'3','name' => 'TV/Audio/Video','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '16','main_category_id'=>'3','name' => 'Computers/Accessories','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '17','main_category_id'=>'3','name' => 'Cameras/Photography','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '18','main_category_id'=>'3','name' => 'Games/Consoles','created_at' => new datetime(),'updated_at' => new datetime()),
			  

			  array('id' => '19','main_category_id'=>'4','name' => 'Bags & Wallets','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '20','main_category_id'=>'4','name' => 'Shoes','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '21','main_category_id'=>'4','name' => 'Watches & Accessories','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '22','main_category_id'=>'4','name' => 'Clothes','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '23','main_category_id'=>'4','name' => 'Beauty & Perfumes','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '24','main_category_id'=>'4','name' => 'Health & Slimming','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '25','main_category_id'=>'4','name' => 'Wedding','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '26','main_category_id'=>'4','name' => 'Maternity','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '27','main_category_id'=>'4','name' => 'For Children','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '28','main_category_id'=>'4','name' => 'Women\'s Collection','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '29','main_category_id'=>'4','name' => 'Bed & Bath','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '30','main_category_id'=>'4','name' => 'Home Appliances & Kitchen','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '31','main_category_id'=>'4','name' => 'Furniture & Decoration','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '32','main_category_id'=>'4','name' => 'Garden Items','created_at' => new datetime(),'updated_at' => new datetime()),

			  array('id' => '33','main_category_id'=>'5','name' => 'Textbooks','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '34','main_category_id'=>'5','name' => 'Sports & Outdoors','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '35','main_category_id'=>'5','name' => 'Hobby & Collectibles','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '36','main_category_id'=>'5','name' => 'Music/Movies/Books/Magazines','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '37','main_category_id'=>'5','name' => 'Pets','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '38','main_category_id'=>'5','name' => 'Tickets','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '39','main_category_id'=>'5','name' => 'Music Instruments','created_at' => new datetime(),'updated_at' => new datetime()),

			  array('id' => '40','main_category_id'=>'6','name' => 'Professional/Business Equipment','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '41','main_category_id'=>'6','name' => 'Business for Sale','created_at' => new datetime(),'updated_at' => new datetime()),



			  array('id' => '42','main_category_id'=>'7','name' => 'Jobs','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '43','main_category_id'=>'7','name' => 'Services','created_at' => new datetime(),'updated_at' => new datetime()),

			  array('id' => '44','main_category_id'=>'8','name' => 'Accommodation & Homestays','created_at' => new datetime(),'updated_at' => new datetime()),
			  array('id' => '45','main_category_id'=>'8','name' => 'Tours and Holidays','created_at' => new datetime(),'updated_at' => new datetime()),


			);

		 	DB::table('sub_categories')->insert($sub_categories);

	 }
}
?>