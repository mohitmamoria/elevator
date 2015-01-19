<?php

class EditionController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('editions.sample2');
	}


}
