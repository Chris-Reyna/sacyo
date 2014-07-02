@extends('layouts.master')

@section('content')		
	<div class="blog-post">
		<h2 class="blog-post-title">{{{ $post->title }}}</h2>
		<p class="blog-post-meta">{{{ $post->created_at }}}</p>
		<p> {{{ $post->message }}}</p>
	</div>
	<hr>
	<div>
		@if (Auth::check())
		@if (Auth::user()->canManagePost($post))
		<a href= "" id="btnDeletePost" >Delete Post</a> |
	
		<a href= "{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a> |
		@endif
		@endif
		<a href= "{{{ action('PostsController@index')}}}">Return to Posts Listing</a>
		
	</div>			
@stop