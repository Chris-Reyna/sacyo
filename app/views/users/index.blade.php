@extends('layouts.master')

@section('content')		
	<h1>List of Parents</h1>
	<div class='mboard'>
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
		@foreach($users as $user)		
			<tr>
				<td>{{{ $user->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}}</td>
				<td>{{{ $user->first_name}}}</td>
				<td> {{{ $user->last_name }}}</td>
				<td> {{{ $user->relationship }}}</td>
				<td> {{{ $user->email }}}</td>
				<td> {{{ $user->address }}}</td>
				<td> {{{ $user->phone}}}</td>
			</tr>			
		@endforeach					
		</table>	
	</div>
	<div>
	{{ $posts->links() }}
	</div>
@stop

