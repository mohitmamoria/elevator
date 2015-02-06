<?php namespace Elevator\Composers;

use Edition;

class EditionComposer {

	public function compose($view)
	{
		return $view
			->with('others', Edition::others(5, $view->edition))
			->with('next', Edition::nextTo($view->edition))
			->with('previous', Edition::previousTo($view->edition));
	}
}