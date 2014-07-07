<?php

class PostsController extends BaseController {


	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
	
	    //run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', ['except' => ['index', 'show']]);
	    $this->beforeFilter('post.protect', ['only' => ['edit', 'update', 'destroy']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//search by title 
		$search = Input::get('search');
	
		if ($search){
	
			$posts = Post::with('user')->where('title','LIKE', "%{$search}%")->orWhere('message', 'LIKE',"%{$search}%")->paginate(4);
	
		}else{
			
			//function to show all posts
			$posts = Post::with('user')->orderBy('created_at','desc')->paginate(4);
		}
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

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Message was NOT Posted Successfully!!');
			return Redirect::back()->withInput()->withErrors($validator);

		} 
		else
		{
			//function to save the posts
			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->message = Input::get('message');
			$post->save();

			Session::flash('successMessage', 'Message posted Successfully');
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

			Session::flash('errorMessage', 'Message was NOT Updated Successfully!!');
			return Redirect::back()->withInput()->withErrors($validator);

		}
		else
		{
			//function to save the posts
			$post->title = Input::get('title');
			$post->message = Input::get('message');
			$post->save();

			Session::flash('successMessage', 'Message Updated Successfully');
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
		$post = Post::findOrFail($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}


}
