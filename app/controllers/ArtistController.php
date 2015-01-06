<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArtistController extends BaseController {

	protected $getColumns = [
		'id',
		'name',
	];

	public function getIndex()
	{
		return Response::json(Artist::all($this->getColumns));
	}

	public function getId($id)
	{
		$artist = Artist::where('id', $id)->get($this->getColumns);
		if ($artist->isEmpty())
		{
			return Response::json([
				'message' => 'Not Found'
			], 404);
		}

		return Response::json($artist);
	}

	public function postRegister()
	{
		$artist = new Artist();
		$artist->name = Input::get('name');

		$artist->save();

		return Response::json([
			'message' => 'Registered',
		], 201);
	}

	public function putId($id)
	{
		$result = Artist::where('id', $id)->update([
			'name' => Input::get('name'),
		]);
		if (!$result)
		{
			return Response::json([
				'message' => 'Not Found'
			], 404);
		}

		return Response::json([
			'message' => 'Update Succeeded'
		]);
	}

	public function deleteId($id)
	{
		$result = Artist::where('id', $id)->delete();
		if (!$result)
		{
			return Response::json([
				'message' => 'Not Found'
			], 404);
		}

		return Response::json([], 204);
	}
}
