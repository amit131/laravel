<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
protected $layout = 'layouts.default';

	public function showWelcome()
	{
	$this->layout->title = " Home";
		//return View::make('hello');
		$items = Category::all();
		$itemList = new ItemsHelper($items);
		$catList = $this->htmlFromArray($itemList->htmlList());
		$this->layout->content = View::make('pages/home',array('items' => $catList));
	}
	
	private function htmlFromArray($array) {
      $html = '';//$e=array();	
      foreach($array as $k=>$v) {
	  $e=explode('|',$k);
        $html .= '<ul>';
        $html .= '<li><a href="'.$e[0].'" class="list-group-item"><span>'.$e[1].'</span></a></li>';
        if(count($v) > 0) {
          $html .= $this->htmlFromArray($v); 
        }
        $html .= '</ul>';
      }
      return $html;
    }
	
	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				 return Redirect::to('dashboard');
				// for now we'll just echo success (even though echoing in a controller is bad)
				//echo 'SUCCESS!';

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login');

			}

		}
	}
	
	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}

}
