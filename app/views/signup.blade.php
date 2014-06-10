@extends('layouts.master')
@section('topscript')
<style>
body{

    background-image:url("img/BYbg.png");
}

 .SUform{
    color: #000;
    background-color: #999;
    
    -webkit-box-shadow: 0 8px 75px -6px black;
    -moz-box-shadow: 0 8px 75px -6px black;
    box-shadow: 0 8px 75px -6px black;
    padding: 50px;
 }
a:hover.btn.btn-primary, .btn.btn-primary {
    color: #fff;
    background-color: #000;
    border-color: #999;

}
.formtext{
    float: right;
}

input{
   border-style: solid; 
}
/*Whodat pic animation*/
.animated { 
    -webkit-animation-duration: 1s; 
    animation-duration: 1s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
} 

@-webkit-keyframes rollIn { 
    0% { opacity: 0; -webkit-transform: translateX(-100%) rotate(-120deg); } 
    100% { opacity: 1; -webkit-transform: translateX(0px) rotate(0deg); } 
} 
@keyframes rollIn { 
    0% { opacity: 0; transform: translateX(-100%) rotate(-120deg); } 
    100% { opacity: 1; transform: translateX(0px) rotate(0deg); } 
} 
.rollIn { 
    -webkit-animation-name: rollIn; 
    animation-name: rollIn; 
}
/*end whodat*/
/*form animation*/

.animated { 
    -webkit-animation-duration: 1s; 
    animation-duration: 1s; 
    -webkit-animation-fill-mode: both; 
    animation-fill-mode: both; 
} 

@-webkit-keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        -webkit-transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        -webkit-transform: translateX(-30px); 
    } 
    80% { 
        -webkit-transform: translateX(10px); 
    } 
    100% { 
        -webkit-transform: translateX(0); 
    } 
} 

@keyframes bounceInRight { 
    0% { 
        opacity: 0; 
        transform: translateX(2000px); 
    } 
    60% { 
        opacity: 1; 
        transform: translateX(-30px); 
    } 
    80% { 
        transform: translateX(10px); 
    } 
    100% { 
        transform: translateX(0); 
    } 
} 

.bounceInRight { 
    -webkit-animation-name: bounceInRight; 
    animation-name: bounceInRight; 
}
/*fornm end*/
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
                        <div class = "container">
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