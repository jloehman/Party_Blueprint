<?php

class PartyController extends \BaseController {
	//public function __construct()
	//{
	    // call base controller constructor
	    //parent::__construct();

	    // run auth filter before all methods on this controller
	    //$this->beforeFilter('auth');
	//}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Showing Todo items, 10 on each page
		$todos = Todo::orderBy('id','desc')->paginate(10);
		return View::make('pages_folder.todo_list')->with('todos', $todos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages_folder.todo_list');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), Todo::$rules);
		if ($validator->fails()) 
		{	
			Session::flash('errorMessage', 'There were errors submitting your form');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$todo = new Todo();
			$todo->user()->associate(Auth::user());
			$todo->title = Input::get('title');
			$todo->save();
			// set flash data
			Session::flash('successMessage', 'Todo List item created successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('PartyController@index');
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
		//
		$todo = Todo::find($id);
		return View::make('pages_folder.todo_list')->with('todo', $todo);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//Ask how to edit on the same page verses being redirect to a new page with that one item
		$todo = Todo::find($id);
		return View::make('pages_folder.todo_list')->with('todo', $todo);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$validator = Validator::make(Input::all(), Todo::$rules);
		if ($validator->fails()) 
		{	// set flash data
			Session::flash('errorMessage', 'Todo List item update Failed');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$todo = Todo::find($id);
			$todo->title = Input::get('title');
			$todo->save();
			// set flash data and to the view as well
			Session::flash('successMessage', 'Todo List item updated successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('PartyController@index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//Need to implement an "Are you sure you want to delete this?"
		$todo = Todo::findOrFail($id);
		$todo->delete();
		Session::flash('successMessage', 'Todo List item deleted successfully');

		return Redirect::action('pages_folder.todo_list');
	}


}
