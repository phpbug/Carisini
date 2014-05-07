<?php

class UsersTableSeeder extends Seeder
{
	 public function run()
	 {
		 	DB::table('users')->delete();
		 	$users = array(
		 		array(
		 			'email' => 'ryanroy@gmail.com',
		 			'password' => Hash::make('pass123$$'),
		 			'created_at' => new Datetime,
		 			'updated_at' => new Datetime,
		 		)
		 	);

		 	DB::table('users')->insert($user);

	 }
}
?>