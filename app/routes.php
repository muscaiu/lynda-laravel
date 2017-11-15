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

Route::get('/', array(
	'before' => 'newyear'|'valentines'|'haloween',
	'after' => 'logvisits',
	function()
{
	return View::make('hello'); //filename hello.php
}));

Route::get('/about', function()
{
	return 'ABOUT content';
});

Route::get('/about/directions', array('as' => 'directions', function()
{
	// $theURL = URL::route('directions')
	return "DIRECTIONS go to: $theURL";
}));

Route::any('/submit-form', function()
{
	return 'FORM';
});

Route::get('/about/{theSubject}', function($theSubject)
{
	return $theSubject.' content';
});

Route::get('/about/{theArt}/{theSpeciality}', function($theArt, $theSpeciality)
{
	return "Welcome to  $theSpeciality in $theArt";
});

Route::get('where', function()
{
	return Redirect::to('submit-form');
});
