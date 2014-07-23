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
	public $contact_rules = [
		'email' => 'email|required',
	];

	public function showHome()
	{
		return View::make('pages_folder.home');
	}

	public function showAbout()
	{
		return View::make('pages_folder.about');
	}

	public function showContact()
	{
		return View::make('pages_folder.contact');
	}

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
	    		if (Auth::user()->is_admin == true) {
	    			return Redirect::action('AdminController@index');
	    		}else{
	    			return Redirect::action('WelcomeController@index');
	    		}
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

	public function send()
	{

		$validator = Validator::make(Input::all(), $this->contact_rules);

		if ($validator->fails()){
			// error message
			Session::flash('errorMessage', 'Sorry, the email failed to send! All fields must be filled out correctly.');
			// redirect with flash error
			return Redirect::action('HomeController@showContact');
		} else {
			//this array captures the input from the form. Never use message as an alias
			//message will need to be used as $message and that is a built in helper so use a different alias
			$data = array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				//'body' is the different alias
				'body' => Input::get('message')
			);

			//Method to capture and send input as strings to a specific email and name
			Mail::send('emails.contact', $data, function($message) {
	        	$message->to('simplessoiree@gmail.com', 'Simple Soiree')->subject(Input::get('subject'));
	    	});
	    	//Success notification and redirects to the webpage
    		Session::flash('successMessage', 'Email Sent!');
	    	return Redirect::action('HomeController@showContact');
		}
	}
}

