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
		$this->call('DiscographyTableSeeder');
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

class DiscographyTableSeeder extends Seeder {

	public function run()
	{
		DB::table('discography')->delete();

		$artist = Artist::first();
		Discography::create(['name' => 'hoge', 'artist_id' => $artist->id]);
		Discography::create(['name' => 'fuga', 'artist_id' => $artist->id]);
		Discography::create(['name' => 'piyo', 'artist_id' => $artist->id]);
	}
}
