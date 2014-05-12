<?php

class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$user = new User();
		$user->first_name = 'Toby';
		$user->last_name = 'Reyna';
		$user->relationship = 'Father';
		$user->email = 'tobyreyna@gmail.com';
		$user->address = '1402 W. Mistletoe Ave.';
		$user->password = 'password';
		$user->phone = '210-452-5557';
		$user->is_admin = true;
		$user->save();

	}

}