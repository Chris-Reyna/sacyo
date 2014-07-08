@extends('layouts.master')
@section('topscript')
@stop
@section('content')
<div class="container" id="login">
	{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin')) }}
	    <h2 class="form-signin-heading">Administrative Login</h2>
	    <input name="email" type="text"class="form-control" placeholder="Email Address" value="{{{ Input::old('email')}}}" required autofocus>
	    <input name="password" type="password" class="form-control" placeholder="Password" required>
	    <button class="btn btn-lg btn-primary active" type="submit">Login</button>
</div>
{{ Form::close() }}

@stop