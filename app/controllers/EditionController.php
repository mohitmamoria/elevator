<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class EditionController extends \BaseController {

	const SAMPLE_SLUG = 'sample';

	const SAMPLE_EDITION = 'stop-talking-start-doing';

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
			if($this->isRequestingSample($slug)) $slug = self::SAMPLE_EDITION;

			$edition = Edition::findbySlug($slug);

			return View::make("editions.{$edition->slug}", compact('edition'));
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::to('home');
		}
	}

	private function isRequestingSample($slug)
	{
		return $slug === self::SAMPLE_SLUG;
	}

}
