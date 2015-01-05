<?php

App::error(function(Symfony\Component\HttpKernel\Exception\NotFoundHttpException $exception, $code)
{
	return Redirect::route('home');
});