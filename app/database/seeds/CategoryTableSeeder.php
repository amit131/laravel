<?php

class CategoryTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('category')->truncate();
        
		\DB::table('category')->insert(array (
			0 => 
			array (
				'id' => 1,
				'parentid' => 0,
				'title' => 'Primary Articles',
				'description' => NULL,
				'language' => NULL,
			),
			1 => 
			array (
				'id' => 2,
				'parentid' => 0,
				'title' => 'Secondary Articles',
				'description' => NULL,
				'language' => NULL,
			),
			2 => 
			array (
				'id' => 3,
				'parentid' => 1,
				'title' => 'Red Primary Articles',
				'description' => NULL,
				'language' => NULL,
			),
			3 => 
			array (
				'id' => 4,
				'parentid' => 1,
				'title' => 'Green Primary Articles',
				'description' => NULL,
				'language' => NULL,
			),
			4 => 
			array (
				'id' => 5,
				'parentid' => 2,
				'title' => 'Red Secondary Articles',
				'description' => NULL,
				'language' => NULL,
			),
		));
	}

}
