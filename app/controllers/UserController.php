<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages_folder.register');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages_folder.register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'The following errors occurred')->withErrors($validator)->withInput();
			// retrieve flash data (same as any other session variable)
    		return Redirect::route('register.index');
		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$user = new User();
			// $todo->user()->associate(Auth::user());
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			$user->save();

			Auth::login($user);

			$data = array(
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'email' => Input::get('email'),
				'password' => Input::get('password')
			);

			Mail::send('users.mails.welcome_email', $data, function($message){
        		$message->to(Input::get('email'), Input::get('first_name').' '.Input::get('last_name'))->subject('Welcome to Simple Soiree, let\'s start planning!');
    		});

			// set flash data. needs to be on the master
			Session::flash('successMessage', 'Registered Successfully!');
				//direct to the welcome create page
    		return Redirect::action('WelcomeController@index');
		}

	}
}