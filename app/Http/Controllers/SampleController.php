<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SampleController extends ApiController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$samples = [
			[
				'id'   => '1',
				'name' => 'Sample1'
			],
			[
				'id'   => '2',
				'name' => 'Sample2'
			]
		];

		return $this->respondWithCollection($samples, function ($sample) 
		{
			return [
				'id'   => (integer) $sample['id'],
				'name' => $sample['name']
			];
		});
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sample = [
			'id'   => "{$id}",
			'name' => "Sample{$id}"
		];

		return $this->respondWithItem($sample, function ($sample) 
		{
			return [
				'id'   => (integer) $sample['id'],
				'name' => $sample['name']
			];
		});
	}

}
