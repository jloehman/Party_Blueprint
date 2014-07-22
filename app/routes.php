<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('party/{id}', function($id) {
// 	$party = Party::find($id);

// 	return $party->budgetItemsPurchasedTotal();
// 	// $party::budgetItemsPurchasedTotal();
// });

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@logout');

Route::get('/', function()
{
	return View::make('pages_folder.home');
});
Route::get('/about', function()
{
	return View::make('pages_folder.about');
});

Route::get('/contact', function()
{
	return View::make('pages_folder.contact');
});

Route::resource('/register', 'UserController');

Route::get('/personal_admin', function()
{
	return View::make('pages_folder.personal_admin');
});

Route::get('/budget', function()
{
	return View::make('pages_folder.budget');
});

Route::get('/summary/{id}', 'PartyController@summary');
Route::resource('/todo_list', 'PartyController');

Route::resource('/guest_list', 'GuestController');

Route::put('/update_purchase', 'BudgetItemController@ajax_update_purchased');

/// DO LIKE THIS -----------------------------------
/// THEN LIKE THAT ---------------------------------
/// WHEN I MOVE YOU MOVE ---------------------------
/// JUST LIKE THIS ---------------------------------
Route::resource('/parties/{id}/budget_item', 'BudgetItemController');

Route::resource('/parties/{id}/guest_list', 'GuestController');

$name = Input::get('name');
//     $qty = Input::get('qty');
//     $cost =Input::get('cost')

Route::resource('/welcome', 'WelcomeController');

Route::resource('/admin_users', 'AdminUserController');

Route::resource('/admin_admin', 'AdminController');

// Route::get('ajax', function () {
//     return View::make('ajax');
// });


// Route::post('/budget_item', function () {
// //can remove after moved in controller
//     $name = Input::get('name');
//     $qty = Input::get('qty');
//     $cost =Input::get('cost');

//     $error = false;
//     // $message = "Over Budget on your $id party";

//     // $result = array(
//     //     'error' => $error,
//     //     'message' => $message,
//     // );

//     return Redirect::to('/budget_item')->with('name', 'cost');

// });
