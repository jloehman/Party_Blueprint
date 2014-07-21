<?php

class BudgetItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$budget_items = BudgetItem::orderBy('id','desc')->paginate(10);
		return View::make('pages_folder.budget_item')->with('budget_items', $budget_items);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages_folder.budget_item');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), BudgetItem::$rules);
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'There were errors submitting your form');

			// retrieve flash data (same as any other session variable)

			return Redirect::route('budget_item.index');

		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$budget_item = new BudgetItem();
			// $todo->user()->associate(Auth::user());
			$budget_item->name = Input::get('name');
			$budget_item->qty = Input::get('qty');
			$budget_item->cost = Input::get('cost');
			$budget_item->save();
			// set flash data
			Session::flash('successMessage', 'Buy List item created successfully');

			// retrieve flash data (same as any other session variable)
			return Redirect::route('budget_item.index');
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
		$budget_item = BudgetItem::find($id);
		return View::make('pages_folder.budget_item')->with('budget_item', $budget_item);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$budget_item = BudgetItem::find($id);
		return View::make('pages_folder.budget_item')->with('budget_item', $budget_item);
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
		$validator = Validator::make(Input::all(), BudgetItem::$rules);
		if ($validator->fails()) 
		{	// set flash data
			Session::flash('errorMessage', 'Buy List item update Failed');

			// retrieve flash data (same as any other session variable)

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$budget_item = BudgetItem::find($id);
			$budget_item->name = Input::get('name');
			$budget_item->qty = Input::get('qty');
			$budget_item->cost = Input::get('cost');
			$budget_item->save();
			// set flash data and to the view as well
			Session::flash('successMessage', 'Buy List item updated successfully');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('BudgetItemController@index');
		}
	}

public function ajax_update_purchased()
{
	$id = Input::get('budgetId');
	$budget = BudgetItem::find($id);
	$budget->is_purchased = 1;
	$budget->save();

	// 

	// $name = Input::get('name');
 //    $qty = Input::get('qty');
 //    $cost =Input::get('cost');

    
 //    $error = false;
 //    $message = "Over Budget on your $id party";

 //    $result = array(
 //    	'error' => $error,
 //    	'message' => $message,
 //    	);
 //    return Redirect::to('/budget_item')->with('name', 'cost');

 //    }
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
		$budget_item = BudgetItem::findOrFail($id);
		$budget_item->delete();
		Session::flash('successMessage', 'Buy List item deleted successfully');

		return Redirect::action('BudgetItemController@index');
	}


}
