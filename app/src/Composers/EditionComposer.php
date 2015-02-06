<?php namespace Elevator\Composers;

use Edition;

class EditionComposer {

	public function compose($view)
	{
		return $view->with('others', Edition::previous(5, $view->edition));
	}
}