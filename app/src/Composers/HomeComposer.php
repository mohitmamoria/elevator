<?php namespace Elevator\Composers;

use Edition;

class HomeComposer {

	public function compose($view)
	{
		return $view->with('latest', Edition::getLatest());
	}
}