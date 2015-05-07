<?php

class UserController extends \BaseController {

protected $layout = 'layouts.default';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->title = " User";
		$user = array();
		// get all the users
		$user = user::all();
		foreach($user as $key => $value){
			foreach($value->group as $v){
				$user[$key]['title'] = $v->title;
			}
		}
		// load the view and pass the users
		$this->layout->content = View::make('user.index')
		->with(array('user' => $user));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->title = " Add User";
		// queries the group db table, orders by title and lists title and id
	    $group_options = DB::table('group')->orderBy('title', 'asc')->lists('title','id');

		// load the create form (app/views/user/create.blade.php)
		$this->layout->content = View::make('user.create', array('group_options' => $group_options));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	  // validate
	  // read more on validation at http://laravel.com/docs/validation
	  $rules = array(
	  'firstname' => 'required',
	  'lastname' => 'required',
	  'username' => 'required',
	  'email' => 'required|email',
	  'password' => 'required',
	  'user_group' => 'required|numeric'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('user/create')
	  	->withErrors($validator)
	  	->withInput(Input::except('password'));
	  } else {
	  // store
	  	$user = new user;
	  	$user->firstname	= Input::get('firstname');
	  	$user->lastname	= Input::get('lastname');
	  	$user->username	= Input::get('username');
	  	$user->email 	 	= Input::get('email');
	  	$user->password	= Input::get('password');
		$user->save();
	  	$user->group()->withTimestamps()->attach(Input::get('user_group'));
	  	
	  // redirect
	  	Session::flash('message', 'Successfully created user!');
	  	return Redirect::to('user');
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
		$this->layout->title = " View User";
		// get the user
		$user = user::find($id);
		// show the view and pass the user to it
		$this->layout->content = View::make('user.show')
		->with('user', $user);	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->title = " Edit User";
		// queries the group db table, orders by title and lists title and id
	    $group_options = DB::table('group')->orderBy('title', 'asc')->lists('title','id');
		// get the user
		$user = user::find($id);
		// show the edit form and pass the user
		$this->layout->content = View::make('user.edit')
		->with(array('user' => $user, 'group_options' => $group_options));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
      // validate
	  // read more on validation at http://laravel.com/docs/validation
	  $rules = array(
	  'firstname' => 'required',
	  'lastname' => 'required',
	  'username' => 'required',
	  'email' => 'required|email',
	  'password' => 'required',
	  'user_group' => 'required|numeric'
	  );
	  $validator = Validator::make(Input::all(), $rules);
	  // process the validation
	  if ($validator->fails()) {
	  	return Redirect::to('user/' . $id . '/edit')
	  	->withErrors($validator)
	  	->withInput(Input::except('password'));
	  } else {
	  // store
	  	$user = user::find($id);
	  	$user->firstname	= Input::get('firstname');
	  	$user->lastname	= Input::get('lastname');
	  	$user->username	= Input::get('username');
	  	$user->email 	 	= Input::get('email');
	  	$user->password	= Input::get('password');
		$user->save();
	  	$user->group()->withTimestamps()->attach(Input::get('user_group'));
	  // redirect
	  	Session::flash('message', 'Successfully updated user!');
	  	return Redirect::to('user');
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
		// delete
		$user = user::find($id);
		$user->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the user!');
		return Redirect::to('user');
	}

	public function getLogin() {
		//$this->layout->title = " Login";
		return View::make('user.login');
	}

	public function postLogin() {
	var_dump(Input::get('email'));
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('users/login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput();
		}
	}
	
	public function getLogout() {
		Auth::logout();
		return Redirect::to('user/login')->with('message', 'Your are now logged out!');
	}
	
}
