<?php

class Subscriber extends Eloquent {

	protected $fillable = ['name', 'email', 'secret'];

	public static function join($subscriber)
	{
		$subscriber['secret'] = str_random();
		return static::create($subscriber);
	}

}
