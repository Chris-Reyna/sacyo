@extends('layouts.master')

@section('content')	

<div class= "container">
<h1>Parent Information</h1>	
	<div class= 'mboard'>
		<table class="table table-striped">
			<tr class="mboardtablehead">
				<th>SIGNUP DATE</th>
				<th>FIRSTNAME</th>
				<th>LASTNAME</th>
				<th>RELATIONSHIP</th>
				<th>EMAIL</th>
				<th>ADDRESS</th>
				<th>PHONE</th>
				
			</tr>	
			<tr>
				<td>{{{ $user->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td>{{{ $user->first_name}}}</td>
				<td> {{{ $user->last_name }}}</td>
				<td> {{{ $user->relationship }}}</td>
				<td> {{{ $user->email }}}</td>
				<td> {{{ $user->address }}}</td>
				<td> {{{ $user->phone}}}</td>

				{{{ $user->children->first_name }}}
			</tr>							
		</table>
	</div>	
</div>
<hr>
<div>
		@if (Auth::check())
		@if (Auth::user()->canManagePost($user))
		<a href= "" id="btnDeletePost" >Delete Post</a> |
	
		<a href= "{{{ action('UsersController@edit', $user->id)}}}">Edit Post</a> |
		@endif
		@endif
		<a class='links' href= "{{{ action('UsersController@index')}}}">Return to Parent Listing</a>
		
	</div>		
@stop