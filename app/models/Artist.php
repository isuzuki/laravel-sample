<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Artist extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'artist';

	public function discographies()
	{
		return $this->hasMany('Discography');
	}

}
