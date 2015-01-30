<?php

class EditionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Edition::create([
			'name' => 'Stop Talking, Start Doing!',
			'is_sample' => true,
			'published_at' => '2015-01-02 00:00:00'
		]);
	}

}
