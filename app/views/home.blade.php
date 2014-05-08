@extends('layouts.master')

@section('content')

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/josh.jpeg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>SCORE!!</h1>
              <p>Promoting motor skills and positive coping skills through sports and religion.</p>
              <p><a class="carousel_btn btn-lg btn-primary" href="https://isis.sportspilot.com/register/Family/Default.asp?ASOID=106044" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/2014bcc.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>2014 PeeWee 1 Basketball City Champs!!</h1>
              <p><a class="carousel_btn btn-lg btn-primary" href="#" role="button">Dead button</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/tinysoccer2.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>2013 Tiny 1 Soccer West Zone Champs!!</h1>
              <p><a class="carousel_btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/toby.jpg" alt="Generic placeholder image">
          <h2>President</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/tony2.jpg" alt="Generic placeholder image">
          <h2>Vice President</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/alfred.jpg" alt="Generic placeholder image">
          <h2>Athletic Director</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">What is CYO?<span class="text-muted">Catholic Youth Organization</span></h2>
          <p class="lead">CYO Sports is a parish based program open to all children and adolescents, regardless of race, religion, national origin, family or economic status. It serves over 13, 000 children and adolescents annually in 60 athletic associations with the help of over 5000 adult volunteers.</p>
          <p class="lead"><strong>The Misssion:</strong>To offer all youth, sports and recreation programs emphasizing friendly competition through good sportsmanship "modeled" by adult participants. To invite all participants, Catholic and otherwise, youth and adults, to share in the life of their church and faith community.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/cyologo1.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/priest.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Where is St. Ann's Catholic Church? <span class="text-muted">210 St.Ann St., San Antonio, TX 78201</span></h2>
          <p class="lead">Established in 1913, St. Ann Catholic church was originally built to serve the small number of Roman Catholic families living in the Beacon Hill community. Today the congregation is made up of families from all over the San Antonio/Bexar county area. At present the Pastor is Father Jim Rutkowski. For more information please click on the link: <a href=" http://www.stanncatholicchurch.com/">St. Ann's</a>.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">How do we operate?<span class="text-muted">Volunteers! Fundraisers! & Donations!</span></h2>
          <p class="lead">St. Ann's CYO program is a non-profit organization, which means 100% of revenue from concession, fundraisers, donations and sponsorships goes to the program!! We would not exist if not for volunteers; that being said: <strong>All Parents are REQUIRED to volunteer 4 hours to work the gate, concession, and/or fundraisers per season for every child that participates in CYO.</strong></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/2014fund.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
@stop


