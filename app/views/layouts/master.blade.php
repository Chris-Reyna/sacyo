<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ST. ANN's CYO</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/home.css">

    @yield('topscript')
    
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{action('HomeController@showHome')}}">ST. ANN's CYO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{action('PostsController@index')}}">Message Board</a></li>
        <li><a href="{{action('UsersController@create')}}">Register with St.Ann's</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Photos <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>{{ link_to('gallery', 'Gallery') }}</li>
            <li>{{ link_to('gallery/new/album', 'New album') }}</li>
            <li>{{ link_to('gallery/new/photo', 'Add photo') }}</li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://ncaa.homestead.com/">West Zone Home Page</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{action('HomeController@showLogin')}}">Login</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <div class="container" id="main-content">
  @if (Session::has('successMessage'))
  <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
  @endif
  @if (Session::has('errorMessage'))
  <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
  @endif
</div>

    @yield('content')
    <div><a class='links' href="{{ URL::previous() }}">Go Back</a></div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>

  </body>
</html>