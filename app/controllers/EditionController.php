<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class EditionController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		try
		{
			$edition = Edition::findbySlug($slug);

			return View::make("editions.{$edition->slug}", compact('edition'));
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::to('home');
		}
	}


}
