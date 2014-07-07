<?php

class ChildrensController extends BaseController {

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
		//function to create a child profile
		return View::make('children.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		//adding validator
		$validator = Validator::make(Input::all(), Child::$rules);

		if ($validator->fails()){
			Session::flash('errorMessage', 'Child was NOT Saved Successfully!!');
			return Redirect::back()->withInput()->withErrors($validator);

		}else{
    		//Save to DB
			$child = new Child();
			$child->first_name = Input::get('firstname');
			$child->last_name = Input::get('lastname');
			$child->gender = Input::get('gender');
			$child->DOB = Input::get('DOB');
			$child->user_id = Auth::user()->id;
			$child->save();

			Session::flash('successMessage', 'Child Created Successfully!!');
			return Redirect::action('UsersController@show', $child->id);
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
