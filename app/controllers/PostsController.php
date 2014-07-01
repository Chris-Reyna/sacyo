<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//function to show all posts
		$posts = Post::orderBy('created_at','desc')->paginate(4);
    	return View::make('posts.index')->with(array('posts' => $posts));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//function to create a post 
		return View::make('posts.create-edit');
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
			//function to save the posts
			$post = new Post();
			$post->title = Input::get('title');
			$post->message = Input::get('message');
			$post->save();
			return Redirect::action('PostsController@index');
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
		//function to show an individual post
		$post = Post::findOrFail($id);
		//show a post for /posts/show/id
		return View::make('posts.show')->with('post', $post);
	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//edit an individual post
		$post = Post::findOrFail($id);
		
		return View::make('posts.create-edit')->with('post', $post);
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
		$post = Post::findOrFail($id);

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);

		}else{
			//function to save the posts
			$post->title = Input::get('title');
			$post->message = Input::get('message');
			$post->save();

			return Redirect::action('PostsController@show', $post->id);
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
		//delete an individual post
	}


}
