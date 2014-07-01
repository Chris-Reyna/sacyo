<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//function to home
		return View::make('home');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//function to create a user
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //adding validator
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);

		}else{
    		//Save to DB
			$user = new User();
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->relationship = Input::get('relationship');
			$user->email = Input::get('email');
			$user->address = Input::get('address');
			$user->password = Input::get('password');
			$user->phone = Input::get('phone');
			$user->save();
			Session::flash('successMessage', 'User Created Successfully');
			return Redirect::action('UsersController@index');
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
		//function to show an individual user
		$user = Post::findOrFail($id);
		//show a post for /posts/show/id
		return View::make('users.show')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
