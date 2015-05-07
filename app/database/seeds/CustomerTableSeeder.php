<?php 
// app/database/seeds/CustomerTableSeeder.php

class CustomerTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('customers')->insert(array(
			'first_name'    	=> 'Chris Sevilleja',
			'last_name' 		=> 'sevilayha',
			'email'    		=> 'chris@scotch.io',
		));
	}

}