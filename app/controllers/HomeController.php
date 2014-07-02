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

	public function showHome()
	{
		return View::make('home');
	}

	public function showSignup()
	{
		return View::make('signup');
	}

	// this is where logic can be added ex. if login shoThisPage else showThatpage
	public function showLogin()
	{
		return View::make('login');
	}
	public function doLogin()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
    		return Redirect::intended('/posts');
		}
		else
		{
    		// login failed, go back to the login screen
			return Redirect::back()->withInput();
		}
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}



}
