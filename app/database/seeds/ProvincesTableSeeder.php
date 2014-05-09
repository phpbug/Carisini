<?php

class ProvincesTableSeeder extends Seeder
{
	 public function run()
	 {
		 	$provinces = array(
			  array('id' => '1','region_id' => '1','name' => 'Ilocos-Norte','created_at' => '2014-05-04 08:12:34','updated_at' => '2014-05-04 08:12:34'),
			  array('id' => '2','region_id' => '1','name' => 'Ilocos-Sur','created_at' => '2014-05-04 08:12:34','updated_at' => '2014-05-04 08:12:34'),
			  array('id' => '3','region_id' => '1','name' => 'La-Union','created_at' => '2014-05-04 08:12:34','updated_at' => '2014-05-04 08:12:34'),
			  array('id' => '4','region_id' => '1','name' => 'Pangasinan','created_at' => '2014-05-04 08:12:34','updated_at' => '2014-05-04 08:12:34'),
			  array('id' => '6','region_id' => '2','name' => 'Batanes','created_at' => '0000-00-00 00:00:00','updated_at' => '0000-00-00 00:00:00'),
			  array('id' => '7','region_id' => '2','name' => 'Cagayan','created_at' => '2014-05-04 05:18:24','updated_at' => '2014-05-04 05:18:24'),
			  array('id' => '8','region_id' => '2','name' => 'Isabela','created_at' => '2014-05-04 05:18:24','updated_at' => '2014-05-04 05:18:24'),
			  array('id' => '9','region_id' => '2','name' => 'Nueva-Vizcaya','created_at' => '2014-05-04 05:18:24','updated_at' => '2014-05-04 05:18:24'),
			  array('id' => '10','region_id' => '2','name' => 'Quirino','created_at' => '2014-05-04 05:18:24','updated_at' => '2014-05-04 05:18:24')
			);

		 	DB::table('provinces')->insert($provinces);

	 }
}
?>