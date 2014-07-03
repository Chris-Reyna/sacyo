<?php

class UserTableSeeder extends DatabaseSeeder {
	public function run() {
		DB::table('users')->delete();
		
		$user = new User();
		$user->first_name = 'Toby';
		$user->last_name = 'Reyna';
		$user->relationship = 'Father';
		$user->email = 'tobyreyna@gmail.com';
		$user->address = '1402 W. Mistletoe Ave.';
		$user->password = Hash::make('password');
		$user->phone = '210-452-5557';
		$user->is_admin = true;
		$user->save();

		$user1 = new User();
		$user1->first_name = 'Chris';
		$user1->last_name = 'Reyna';
		$user1->relationship = 'Uncle';
		$user1->email = 'christopher.reyna@yahoo.com';
		$user1->address = '1410 W. Mistletoe Ave.';
		$user1->password = Hash::make('12345678');
		$user1->phone = '210-573-8357';
		$user1->is_admin = false;
		$user1->save();
		
		

		

	}

}