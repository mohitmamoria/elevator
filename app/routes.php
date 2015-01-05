<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('join', ['as' => 'subscription', 'uses' => 'SubscriptionController@create']);
Route::post('join', ['as' => 'subscription', 'uses' => 'SubscriptionController@join']);
Route::get('join/thank-you', ['as' => 'subscribed', 'uses' => 'SubscriptionController@done']);
Route::get('editions/{slug}', ['as' => 'edition.show', 'uses' => 'EditionController@show']);
