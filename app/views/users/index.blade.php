@extends('layouts.master')

@section('content')
@foreach($users as $user)		
<div class="blog-post">
	<h1>List of parents</h1>
	@foreach($users as $user)
		<p class="blog-post-title">{{{ $user->firstname}}}</p>
		<p class="blog-post-meta">{{{ $user->lastname }}}</p>
		<p class="blog-post-meta">{{{ $user->relationship }}}</p>
		<p class="blog-post-meta">{{{ $user->email }}}</p>
		<p class="blog-post-meta">{{{ $user->address }}}</p>
		<p class="blog-post-meta">{{{ $user->password }}}</p>
		<p class="blog-post-meta">{{{ $user->phone}}}</p>
	@endforeach	
</div>		

@stop

