<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ArtistTableSeeder');
	}

}

class ArtistTableSeeder extends Seeder {

	public function run()
	{
		DB::table('artist')->delete();

		Artist::create(['name' => 'foo']);
		Artist::create(['name' => 'bar']);
	}
}
