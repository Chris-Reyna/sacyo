<?php

class UsersController extends BaseController {
	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
		 // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', ['except' => ['create']]);
	    $this->beforeFilter('post.protect', ['only' => ['edit', 'update', 'destroy']]);
	    // run auth filter before all methods on this controller except index and show
	    // $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//function to home
		$users = User::paginate(2);
    	return View::make('users.index')->with(array('users' => $users));
    	// return 'test this out';
    	// return View::make('users.index');
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
		return View::make('users.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //adding validator
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()){
			Session::flash('errorMessage', 'User was NOT Saved Successfully!!');
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

			Session::flash('successMessage', 'User Created Successfully!!');
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
		$user = User::findOrFail($id);
		//show a post for /user/show/id
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
		//edit an individual user
		$user = User::findOrFail($id);
		
		return View::make('users.create-edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//update an individual post
		$user = User::findOrFail($id);

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()){

			Session::flash('errorMessage', 'Profile was NOT Updated Successfully!!');
			return Redirect::back()->withInput()->withErrors($validator);

		}else{
			//function to save the users to DB
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->relationship = Input::get('relationship');
			$user->email = Input::get('email');
			$user->address = Input::get('address');
			$user->password = Input::get('password');
			$user->phone = Input::get('phone');
			$user->save();

			Session::flash('successMessage', 'Profile Updated Successfully');
			return Redirect::action('UsersController@show', $user->id);
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
		//
	}


}
