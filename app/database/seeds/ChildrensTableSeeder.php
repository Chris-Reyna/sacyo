
<?php

class ChildrensTableSeeder extends DatabaseSeeder {
	public function run() {
		DB::table('childrens')->delete();

		$child = new Child();
		$child->first_name = 'Julia';
		$child->last_name = 'Reyna';
		$child->gender = 'female';
		$child->DOB = '03/29/00';
		$child->user_id = 1;
		$child->save();

		$child1 = new Child();
		$child1->first_name = 'Joshua';
		$child1->last_name = 'Reyna';
		$child1->gender = 'male';
		$child1->DOB = '12/3/00';
		$child1->user_id = 2;
		$child1->save();

	}

}