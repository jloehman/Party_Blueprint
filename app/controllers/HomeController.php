<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		return View::make('pages_folder.login');
	}
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
    		return Redirect::action('GuestController@index');
    		
		}
		else
		{
    		Session::flash('errorMessage', 'Email or password not found.');
    		return Redirect::action('HomeController@showLogin');
		}
	}

	public function logout()
	{
		Auth::logout();
		return View::make('pages_folder.home');
	}

	
}

