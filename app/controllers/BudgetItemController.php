<?php

class BudgetItemController extends \BaseController {

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
		// $budget_items = BudgetItem::orderBy('id','desc')->paginate(10);
		$budget_items_not_purchased = BudgetItem::budget_for_party_not_purchased($id);
		$budget_items_purchased = BudgetItem::budget_for_party_purchased($id);
		$party = Party::find($id);
		$sumOfPurchased = $party->budgetItemsPurchasedTotal();

		$data = array(
			'budget_items_not_purchased' => $budget_items_not_purchased,
			'budget_items_purchased' => $budget_items_purchased,
			'party' => $party,
			'sumOfPurchased' => $sumOfPurchased
		);

		return View::make('pages_folder.budget_item')->with($data);
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
	public function store($id)
	{
		//
		$validator = Validator::make(Input::all(), BudgetItem::$rules);
		if ($validator->fails())
		{
			Session::flash('errorMessage', 'There were errors submitting your form');

			// retrieve flash data (same as any other session variable)

			return Redirect::action('BudgetItemController@index', $id);

		}
		else
		{
			//Need to ask about the user here and the one to many relationship
			$budget_item = new BudgetItem();
			$budget_item->name = Input::get('name');
			$budget_item->qty = Input::get('qty');
			$budget_item->cost = Input::get('cost');
			$budget_item->party_id = $id;

			$budget_item->save();
			// set flash data
			Session::flash('successMessage', 'Buy List item created successfully');

			// retrieve flash data (same as any other session variable)
			return Redirect::action('BudgetItemController@index', $id);
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
	$budget->is_purchased = (Input::get('is_purchased') == '1');
	$budget->save();

	return array('status' => 'success');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($party_id, $id)
	{
		//Need to implement an "Are you sure you want to delete this?"
		$budget_item = BudgetItem::findOrFail($id);
		$budget_item->delete();
		Session::flash('successMessage', 'Buy List item deleted successfully');

		return Redirect::action('BudgetItemController@index', $party_id);
	}


}
