@extends('layouts.master')

@section('content')	

<div class= "container">
	<h1 id="mboardheader">Message</h1>
	<div class= 'mboard'>
		<table class="table table-striped">
			<tr class="mboardtablehead">
				<th>TITLE</th>
				<th>DATE</th>
				<th>MESSAGE</th>
			</tr>		
			<tr>
				<td>{{{ $post->title }}}</td>
				<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td> {{{ $post->message }}}</td>
			</tr>							
		</table>
	</div>
</div>
	<hr>
	<div>
		
		<a class='links' href="#" id="btnDeletePost">Delete Post</a> |
	
		<a class='links' href="{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a> |
		
		<a class='links' href="{{{ action('PostsController@index')}}}">Return to Message Listing</a>
		
	</div>			
@stop