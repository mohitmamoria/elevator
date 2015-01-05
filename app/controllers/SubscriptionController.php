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

			$subscriber = Subscriber::join($input);

			Mail::send('emails.elevator.welcome', compact('subscriber'), function($message) use($subscriber)
			{
				$message
					->to($subscriber->email, $subscriber->name)
					->subject('Thank You for joining the Elevator!');
			});

			return Redirect::route('subscribed');
		}
		catch(Exception $e)
		{
			return Redirect::route('subscription')->withInput()->withErrors(['_global' => 'Something went wrong! Please try again later.']);
		}
	}

	public function done()
	{
		return View::make('subscription.thanks');
	}

	private function validatorWhenJoining($input)
	{
		return Validator::make($input, [
			'name' => 'required',
			'email' => 'required|email|unique:subscribers'
		]);
	}
}
