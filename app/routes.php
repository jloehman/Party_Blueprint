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

Route::resource('/admin_admin', 'AdminController');

Route::resource('/todo_list', 'PartyController');

Route::resource('/guest_list', 'GuestController');

Route::resource('/budget_item', 'BudgetItemController');

Route::get('/summary_page', function()
{
	return View::make('pages_folder.summary_page');
});

Route::get('ajax', function () {
    return View::make('ajax');
});

Route::post('ajax', function () {

    $name = Input::get('name');
    $qty = Input::get('qty');
    $cost =Input::get('cost');

    $error = false;
    $message = "Successfully processed id: $id with name: $name.";

    $result = array(
        'error' => $error,
        'message' => $message,
    );

    return Response::json($result);

});




