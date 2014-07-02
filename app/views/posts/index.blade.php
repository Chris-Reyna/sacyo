@extends('layouts.master')

@section('content')


<div class= "container">
	<h1 id="mboardheader">St. Ann's CYO Message Board</h1>
	<div class= 'mboard'>
		<table class="table table-striped">
			<tr class="mboardtablehead">
				<th>TITLE</th>
				<th>DATE</th>
				<th>MESSAGE</th>
			</tr>
		@foreach($posts as $post)		
			<tr>
				<td>{{{ $post->title }}}</td>
				<td>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td> {{{ $post->message }}}</td>
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