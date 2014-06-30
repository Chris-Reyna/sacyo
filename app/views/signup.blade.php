@extends('layouts.master')
@section('topscript')
<style>
body{

    background-image:url("img/BYbg.png");
}
</style>
@stop



@section('content')
<body>
    <div class="container">
        <div class="span3">
            <div>
                <form action= "UsersController@store" method= "GET"class= "SUform" >
                    <div class="row">
                    <div class="col-md-6">
                        <h3>Why sign up with St. Ann's before registering in Sportspiolot?</h3>
                        <p class= "text-left">By signing up with the Parish program, this allows a board member to contact you and ask any questions you may have about CYO and a specific team before registering with on Sportpilot website. This will also make it easier for board members to contact you throughout the season and in between individual seasons.</p>
                        <img id="animated-example" class="animated rollIn" src="img/who.jpg" alt="Small pic">
                    </div>
                    <div id="animated-example" class="animated bounceInRight">
                        <div class="col-md-6">
                            <div>
                                <label>First Name</label>
                                <div><input type="text" name="firstname" class="span3"></div>
                                
                            </div>
                            <div>
                                <label>Last Name</label>
                                <div><input type="text" name="lastname" class="span3"></div>
                            </div>
                            <div>
                                <label>Relationship to Player(s)</label>
                                <div><input type="text" name="relationship" class="span3"></div>
                            </div>
                            <div>
                                <label>Email </label>
                                <div><input type="email" name="email" class="span3"></div>
                            </div>
                            <div>
                                <label>Address</label>
                                <div><input type="text" name="address" class="span3"></div>
                            </div>
                            <div>
                                <label>Password</label>
                                <div><input type="password" name="password" class="span3"></div>
                            </div>
                            <div>
                                <label>Phone Number </label>
                                <div><input type="text" name="phone" class ="span3"></div>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <input type="submit" value="Sign up" class="btn btn-primary ">  
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</body>
@stop

@section('bottomscript')
@stop