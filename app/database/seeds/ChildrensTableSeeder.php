
<?php

class ChildrensTableSeeder extends DatabaseSeeder {
	public function run() {
		DB::table('childrens')->delete();

		$child = new Child();
		$child->first_name = 'Julia';
		$child->last_name = 'Reyna';
		$child->gender = 'female';
		$child->DOB = '03/29/00';
		$child->child_id = 1;
		$child->save();

	}

}