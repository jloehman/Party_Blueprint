<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::orderBy('id','desc')->paginate(10);
		return View::make('pages_folder.admin_admin')->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages_folder.admin_admin');
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

			return Redirect::route('admin_admin.index');

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
			$user->is_admin = Input::get('is_admin');
			$user->save();
			// set flash data
			Session::flash('successMessage', 'Registered Successfully!');

			// retrieve flash data (same as any other session variable)
			return Redirect::route('admin_admin.index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return View::make('pages_folder.admin_admin')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('pages_folder.admin_admin')->with('user', $user);
	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		Session::flash('successMessage', 'Buy List item deleted successfully');

		return Redirect::action('AdminController@index');
	}


}
