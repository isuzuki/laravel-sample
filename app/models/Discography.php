<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Discography extends Eloquent {

	use SoftDeletingTrait;

	protected $table = 'discography';

	public function artist()
	{
		return $this->belongsTo('Discography');
	}

}
