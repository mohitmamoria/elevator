<?php

class PagesController extends \BaseController {

	/**
	 * Returns the home page
	 *
	 * @return Illuminate\View\View
	 */
	public function home()
	{
		return View::make('pages.index');
	}
}
