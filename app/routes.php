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

/*Route::get('/', function()
{
	return View::make('hello');
});


Route::get('category', function() {

	return View::make('category')

		// all the bears (will also return the fish, trees, and picnics that belong to them)
		->with('category', Category::all());

});*/

Route::get('/', array('as'=>'home', 'uses'=>'HomeController@showWelcome'));

// Authentication routes
Route::get('login', array('as'=>'login', 'uses'=>'UserController@getLogin'));
Route::post('login', 'UserController@postLogin');
Route::get('logout', array('as'=>'logout', 'uses'=>'UserController@getLogout'));

// admin routes 'prefix' => 'admin',
//Route::group(array('before' => 'auth'), function()
//{
//Route::get('/', array('as'=>'dashboard', 'uses'=>'UserController@index'));

Route::resource('user', 'UserController'); 
Route::resource('group', 'GroupController'); 
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');

//Route::get('/category', 'CategoryController@listCategories');
//});

/*
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
	
Route::get('dashboard', array('before' => 'auth', function()
{
    return View::make('secure');
}));
	
Route::get('logout', array('uses' => 'HomeController@doLogout'));
*/