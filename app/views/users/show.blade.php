@extends('layouts.master')

@section('content')	

<h1>Parent Information</h1>	
<div class="blog-post">
	<p class="blog-post-title">{{{ $user->firstname}}}</p>
	<p class="blog-post-meta">{{{ $user->lastname }}}</p>
	<p class="blog-post-meta">{{{ $user->relationship }}}</p>
	<p class="blog-post-meta">{{{ $user->email }}}</p>
	<p class="blog-post-meta">{{{ $user->address }}}</p>
	<p class="blog-post-meta">{{{ $user->password }}}</p>
	<p class="blog-post-meta">{{{ $user->phone}}}</p>	
</div>			
@stop