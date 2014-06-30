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
<h1>Create Message for Message Board</h1>
<div class="container ">
	<div class="row "id="Mform" >
		<div class="col-md-6">
			<form id="creator" action="{{{ action('PostsController@store') }}}" method="POST">
				<div>
					<label for="Title">Title</label><br>
					<input type="text" id="Title" name="Title" value="{{{ Input::old('Title')}}}">
				</div>
				<br>
				<div>
					<label for="message">Message</label><br>
					<textarea id="message" name="message" rows="15" cols="70" >{{{ Input::old('Body')}}}</textarea>
				</div>
				<button type="submit">Create New Post</button>
			</form>
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