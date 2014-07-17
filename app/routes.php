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

Route::get('/register', function()
{
	return View::make('pages_folder.register');
});

Route::get('/personal_admin', function()
{
	return View::make('pages_folder.personal_admin');
});

Route::get('/budget', function()
{
	return View::make('pages_folder.budget');
});

Route::get('/guest_list', function()
{
	return View::make('pages_folder.guest_list');
});

Route::resource('/todo_list', 'PartyController');

Route::get('/summary_page', function()
{
	return View::make('pages_folder.summary_page');
});

Route::get('/admin_admin', function()
{
	return View::make('pages_folder.admin_admin');
});

Route::get('/login', function()
{
	return View::make('pages_folder.login');
});

