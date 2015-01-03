<?php

class SubscriptionController extends \BaseController {

	/**
	 * Show form to new visitor
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('subscription.create');
	}

	/**
	 * Join a new member in the elevator
	 *
	 * @return Response
	 */
	public function join()
	{
		try
		{
			$input = Input::all();
			$v = $this->validatorWhenJoining($input);
			
			if($v->fails())
			{
				return Redirect::route('subscription')->withInput()->withErrors($v);
			}

			$subscriber = Subscriber::create($input);

			return Redirect::route('subscribed');
		}
		catch(Exception $e)
		{
			dd($e->getMessage());
			return Redirect::route('subscription')->withInput()->withErrors(['_global' => 'Something went wrong! Please try again later.']);
		}
	}

	public function done()
	{
		return 'thanks';
	}

	private function validatorWhenJoining($input)
	{
		return Validator::make($input, [
			'name' => 'required',
			'email' => 'required|email|unique:subscribers'
		]);
	}
}
