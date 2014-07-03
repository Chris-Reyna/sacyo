@extends('layouts.master')
@section('topscript')
@stop
@section('content')
<div class="container" id="login">
	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	<form class="form-signin" role="form">
	    <h2 class="form-signin-heading">Administrative Login</h2>
	    <input name="email" class="form-control" placeholder="Email address" required autofocus>
	    <input name="password" type="password" class="form-control" placeholder="Password" required>
	    <label class="checkbox">
	      <input type="checkbox" value="remember-me"> Remember me</input>
	    </label>
	    <button class="btn btn-lg btn-primary active" type="submit">Login</button>
</div>

{{ Form::close() }}

@stop