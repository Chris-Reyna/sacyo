@extends('layouts.master')
@section('topscript')
<style type="text/css">
 textarea{
   border-style: solid; 

}


 #Mform{
    color: #000;
    background-color: #999;
    
    -webkit-box-shadow: 0 8px 75px -6px #ffff00;
    -moz-box-shadow: 0 8px 75px -6px #ffff00;
    box-shadow: 0 8px 75px -6px #ffff00;
    padding: 50px;

    -moz-border-radius: 15px;
	border-radius: 25px;
 }
 
</style>
@stop
@section('content')

@if (isset($post))
<h1>Edit Message</h1>

@else
<h1>Create Message for Message Board</h1>	
@endif
<div class="container ">
	<div class="row "id="Mform" >
		<div class="col-md-6">
			@if (isset($post))
			{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
			@else
			{{ Form::open(array('action' => 'PostsController@store')) }}
			@endif
				<div>
					{{ $errors->first('title', '<span class= "help">:message</span>')}}<br>
					{{ Form::label('title', 'Title') }}
					<br>
					{{ Form::text('title') }}
				</div>
				<br>
				<div>
					{{ Form::label('message', 'Message') }}
					<br>
					{{ Form::textarea('message', null, ['size' => '70x15','id' => 'message']) }}
				</div>
				@if (isset($post))
				<button type="submit">Edit Post</button>
				@else
				<button type="submit">Create New Post</button>
				@endif
			{{ Form::close() }}

		</div>
		<div class="col-md-6">
			<div id="animated-example" class="animated bounceInRight">
				<h2>Convey information such as:</h2>
					<ul>
						<li>Fundraiser Announcements</li>
						<li>Schedule Changes</li>
						<li>Parish Announcements</li>
						<li>Any other general information</li>
					</ul>
			</div>
		</div>
	</div>
</div>
@stop