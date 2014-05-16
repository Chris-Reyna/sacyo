<?php

class UsersController.php extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		Log::info($input);
		$user = User::findOrFail($id);
		// create the validator
    	$validator = Validator::make($input, User::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the user signup page with validation errors and old inputs
    	    Session::flash('errorMessage', 'User was NOT Created Successfully!!');
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	}
    	else
    	{
        	// validation succeeded, create and save the user
    		//Save to DB
    		//add image
    		
    		$firstname = Input::get('firstname');
			$lastname = Input::get('lastname');
			$relationship = Input::get('relationship');
			$email = Input::get('email');
			$address = Input::get('address');
			$password = Input::get('password');
			$phone = Input::get('phone');
			$user->firstname = $firstname;
			$user->lastname = $lastname;
			$user->relationship = $relationship;
			$user->email = $email;
			$user->address = $address;
			$user->password = $password;
			$user->phone = $phone;
			$user->save();
			Session::flash('successMessage', 'User Created Successfully');
			return Redirect::action('HomeController@showHome');
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
		//
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
