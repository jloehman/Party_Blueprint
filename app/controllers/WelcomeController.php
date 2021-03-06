<?php

class WelcomeController extends \BaseController {
	
	public function __construct()
	{
	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages_folder.welcome');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages_folder.create_new_party');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Party::$rules);
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'There were errors submitting your form');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$party = new Party();
			// $todo->user()->associate(Auth::user());
			$party->party_name = Input::get('party_name');
			$party->event_date = Input::get('event_date');
			$party->start_time = Input::get('start_time');
			$party->end_time = Input::get('end_time');
			$party->location = Input::get('location');
			$party->budget = Input::get('budget');
			$party->user_id = Auth::user()->id;
			$party->save();
			
			// set flash data
			Session::flash('successMessage', 'Party Created Successfully!');

			// retrieve flash data (same as any other session variable)
			
			// redirect to summary page and send new id

			// return View::make('pages_folder.summary_page');
			return Redirect::action('PartyController@summary', $party->id);
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
		$party = Party::find($id);
		return Redirect::action('PartyController@summary', $party->id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$party = Party::find($id);
		return View::make('pages_folder.welcome')->with('party', $party);
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
		$party = Party::findOrFail($id);
		$party->delete();
		Session::flash('successMessage', 'Party deleted successfully');

		return Redirect::action('WelcomeController@index');
	}


}
