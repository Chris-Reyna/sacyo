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
                    {{ Form::model($user, array('action' => array('ChildrensController@update', $child->id), 'class' => 'SUform', 'method' => 'PUT')) }}
                @else
                    {{ Form::open(array('action' => 'ChildrensController@store', 'class' => 'SUform')) }}
                @endif
                    <div class="row">
                    <div class="col-md-6">
                        <h3>Add a Child to your Profile</h3>
                        <p class= "text-left">Please enter ALL information.</p>
                        <img id="animated-example" class="animated rollIn" src="/img/who.jpg" alt="Small pic">
                    </div>
                    <div id="animated-example" class="animated bounceInRight">
                        <div class="col-md-6">
                            <div>
                                {{ $errors->first('firstname', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('firstname', 'First Name') }}
                                <div>{{ Form::text('firstname', null, array('class' => 'span3')) }}</div>
                                
                            <div>
                                {{ $errors->first('lastname', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('lastname', 'Last Name') }}
                                <div>{{ Form::text('lastname', null, array('class' => 'span3')) }}</div>
                            </div>
                            <div>
                                {{ $errors->first('gender', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('gender', 'Male or Female') }}
                                <div>{{ Form::text('gender', null, array('class' => 'span3')) }}</div>
                            <div>
                                {{ $errors->first('DOB', '<span class= "help">:message</span>')}}<br>
                                {{ Form::label('DOB', 'Birthday mm/dd/yy') }}
                                <div>{{ Form::text('DOB', null, array('class' => 'span3')) }}</div>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <button type="submit" class="btn btn-primary ">Add Child</button>  
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