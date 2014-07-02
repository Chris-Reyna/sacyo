@extends('layouts.master')
@section('topscript')
<style>
body{

    background-image:url("/img/BYbg.png");
}
</style>
@stop



@section('content')
<body>

    <div class="container">
        <div class="span3">
            <div>
                @if (isset($user))
                    {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'class' => 'SUform', 'method' => 'PUT')) }}
                @else
                    {{ Form::open(array('action' => 'UsersController@store', 'class' => 'SUform')) }}
                @endif
                    <div class="row">
                    <div class="col-md-6">
                        <h3>Why sign up with St. Ann's before registering in Sportspiolot?</h3>
                        <p class= "text-left">By signing up with the Parish program, this allows a board member to contact you and ask any questions you may have about CYO and a specific team before registering with on Sportpilot website. This will also make it easier for board members to contact you throughout the season and in between individual seasons.</p>
                        <img id="animated-example" class="animated rollIn" src="/img/who.jpg" alt="Small pic">
                    </div>
                    <div id="animated-example" class="animated bounceInRight">
                        <div class="col-md-6">
                            <div>
                                {{ $errors->first('firstname', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('firstname', 'First Name') }}
                                <div>{{ Form::text('first_name', null, array('class' => 'span3')) }}</div>
                                
                            <div>
                                {{ $errors->first('lastname', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('lastname', 'Last Name') }}
                                <div>{{ Form::text('last_name', null, array('class' => 'span3')) }}</div>
                            </div>
                            <div>
                                {{ $errors->first('relationship', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('relationship', 'Relationship to Player(s)') }}
                                <div>{{ Form::text('relationship', null, array('class' => 'span3')) }}</div>
                            <div>
                                {{ $errors->first('email', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('email', 'Email Address') }}
                                <div>{{ Form::text('email', null, array('class' => 'span3')) }}</div>
                            </div>
                            <div>
                                {{ $errors->first('address', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('address', 'Address with Zipcode') }}
                                <div>{{ Form::text('address', null, array('class' => 'span3')) }}</div>
                            </div>
                            <div>
                                {{ $errors->first('password', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('password', 'Password (Between 8 and 12 characters)') }}
                                <div>{{ Form::text('password', null, array('class' => 'span3')) }}</div>
                            </div>
                            <div>
                                {{ $errors->first('phone', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('phone', 'Phone Number') }}
                                <div>{{ Form::text('phone', null, array('class' => 'span3')) }}</div>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary ">Create Profile</button>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{ Form::close() }}
            </div>
        </div>
    </div>
</body>
@stop

@section('bottomscript')
@stop