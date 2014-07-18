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
			Session::flash('errorMessage', 'There were errors submitting your form');

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
			// set flash data
			Session::flash('successMessage', 'Registered Successfully!');

			// retrieve flash data (same as any other session variable)
			return Redirect::route('register.index');
		}
	}


}
