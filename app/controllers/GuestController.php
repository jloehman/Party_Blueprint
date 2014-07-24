<?php

class GuestController extends \BaseController {

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
	public function index($id)
	{
		//look into pagination..for everything
		$guests = Guest::where('party_id', $id)->orderBy('id','desc')->get();
		$party = Party::find($id);

		$data = array(
			'guests' => $guests,
			'party' => $party
		);

		return View::make('pages_folder.guest_list')->with($data);
	}
		


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('pages_folder.guest_list');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		//
		$validator = Validator::make(Input::all(), Guest::$rules);
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'There were errors submitting your form');
			return Redirect::action('GuestController@index');
		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$guest = new Guest();
			$guest->party_id = $id;
			$guest->name = Input::get('name');
			$guest->email = Input::get('email');
			$guest->phone = Input::get('phone');
			$guest->is_attending = Input::get('is_attending');
			$guest->comment = Input::get('comment');
			$guest->save();
			// set flash data
			Session::flash('successMessage', 'Guest List item created successfully');

			// retrieve flash data (same as any other session variable)
			return Redirect::action('GuestController@index', $id);
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
		$guest = Guest::find($id);
		return View::make('pages_folder.guest_list')->with('guest', $guest);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$guest = Guest::find($id);
		return View::make('pages_folder.guest_list')->with('guest', $guest);
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
		$validator = Validator::make(Input::all(), Guest::$rules);
		if ($validator->fails()) 
		{	// set flash data
			Session::flash('errorMessage', 'Guest List item update Failed');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$guest = Guest::find($id);
			$guest->name = Input::get('name');
			$guest->email = Input::get('email');
			$guest->phone = Input::get('phone');
			$guest->is_attending = Input::get('is_attending');
			$guest->comment = Input::get('comment');
			$guest->save();
			// set flash data and to the view as well
			Session::flash('successMessage', 'Guest List item updated successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('GuestController@index');
		}
	}

	

	public function ajaxUpdateAttend(){
		$id = Input::get('id');

		$guest = Guest::findOrFail($id);
		$guest->plus = Input::get('value');
		$guest->save();

		// return Response::json(['success' => true]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($party_id, $id)
	{
		//
		$guest = Guest::findOrFail($id);
		$guest->delete();
		Session::flash('successMessage', 'Buy List item deleted successfully');

		return Redirect::action('GuestController@index', $party_id);
	}


}
