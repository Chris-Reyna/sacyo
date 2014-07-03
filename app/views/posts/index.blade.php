@extends('layouts.master')
@section('topscript')
<style type="text/css">
#search{
	color: #000;
}
</style>
@stop
@section('content')


<div class= "container">
	{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
			<div class= 'pull-right' id='search'>
				{{Form::text('search', null, array( 'placeholder' => 'Search by Key Words')) }}
				{{Form::submit('Search') }}
			</div>
		{{Form::close()}}
	<h1 id="mboardheader">St. Ann's CYO Message Board</h1>
	<div class= 'mboard'>
		<table class="table table-striped">
			<tr class="mboardtablehead">
				<th>TITLE</th>
				<th>AUTHOR EMAIL</th>
				<th>DATE</th>
				<th>MESSAGE</th>
			</tr>
		@foreach($posts as $post)		
			<tr>
				<td><a class='links2' href= "{{{ action('PostsController@show', $post->id)}}}"><h5>{{{ $post->title }}}</h5></a></td>
				<td>{{{ $post->user->email }}} </td>
				<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td> {{ Str::words($post->message, 30) }}</td>
			</tr>			
		@endforeach					
		</table>
	


		
	</div>
</div>
<div>
	<div>
	<a href= "{{{ action('PostsController@create')}}}" class="btn btn-default btn-lg active">Create New Message</a>
</div>
	{{ $posts->links() }}
</div>
@stop