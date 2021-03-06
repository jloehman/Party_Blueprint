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

// Home route
Route::get('/', 'HomeController@showHome');

// Content routes
Route::get('/about', 'HomeController@showAbout');
Route::get('/contact', 'HomeController@showContact');

// Login/logout routes
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@logout');
Route::resource('/register', 'UserController');

// Controller that handles party database resource
Route::resource('/welcome', 'WelcomeController');

// Budget Item controller
Route::resource('/parties/{id}/budget_item', 'BudgetItemController');

// Guest Controller
Route::post('/plusOne', ' GuestController@ajaxUpdateAttend');
// Route::post('/guestAttend', 'GuestController@ajaxGuestShow');
Route::resource('/parties/{id}/guest_list', 'GuestController');
// Route::get('/parties/{id}/guest_list', array('as' => 'guests', 'uses' => 'UserController@showProfile'));

// Todo list at party controller
Route::post('/updateTodo', 'PartyController@ajaxUpdateTodo');
Route::post('/plusOne', 'PartyController@ajaxUpdatePlusOne');
Route::resource('/parties/{id}/todo_list', 'PartyController'); // ---------- note done
Route::get('/summary/{id}', 'PartyController@summary');

// Admin and user management
Route::resource('/admin_users', 'AdminUserController');
Route::resource('/admin_admin', 'AdminController');

// Ajax to update budget item drag and drop
Route::put('/update_purchase', 'BudgetItemController@ajax_update_purchased');

// Contact form post route
Route::post('/send', 'HomeController@send');

//in controller or routes
Route::post('/ajax-temp', function() {
	$id = Input::get('id');

	$guest = Guest::findOrFail($id);
	$guest->is_attending = (Input::get('value') == 'true') ? true : false;
	$guest->save();

	return Response::json(['success' => true]);
});











