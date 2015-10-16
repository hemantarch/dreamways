
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dreamwaves</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/common.css" rel="stylesheet">
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top home">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="{!! url('/') !!}"><img src="assets/images/main-logo.png"></a>
        </div>
        
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="{!! url('auth/register') !!}">Sign Up</a></li>
            <li role="presentation"><a href="{!! url('auth/login') !!}">Log In</a></li>
            <li role="presentation"><a href="{!! url('auth/register') !!}">Favorites</a></li>
            <li role="presentation"><a href="{!! url('suggestion') !!}">Suggest</a></li>
          </ul>
          </div>
      
      
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron home-jumbotron ">
      <div class="container">
        	<div class="row">
        				 	  <div class="col-xs-6 col-sm-3"></div>
							  <div class="col-xs-6 col-sm-6" style="">
							  <h2>EXPLORE THE WORLD</h2>
							  <p>Find the top user suggested activities to do anywhere in the world</p>
							  		<form>
							  			<input type="text" placeholder="Where would you like to go.."/><button>Search</button>
							  		</form>
							  </div>
							  
							  <div class="col-xs-6 col-sm-3"></div>
        				</div>
      </div>
    </div>

    <div class="jumbotron discover">
      <div class="home-discover container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"><h4>DISCOVER THE TOP THINGS TO DO IN</h4></div>
          <div class="col-md-4"></div>
        </div>



        
         <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x550" alt="">
                </a>
            </div>
            
        </div>
        <!-- /.row -->

        <div class="col-md-2"></div>

        
        </div>
        </div>
      </div>
      </div>
      </div>

      

 <!-- Carousel
    ================================================== -->

    <div class="jumbotron home-carousel">
    <h4>START YOUR JOURNEY</h4>
    <br/>
    <br/>
      <div class="container">
          <div class="row">
                <div class="col-md-1"><img src="assets/images/left-arrow.png"></div>
                <div class="col-md-10">

                  <div class="row">
      <div class="col-xs-4 col-sm-4">
        <img src="assets/images/home-carousel-1.jpg" class="img-responsive" align="center">
        <h5>1. Pick a Destination</h5>
        <p>Lorem ipsum dolor sit amet, 
consectetur adipiscing Lorem
ipsum dolor sit amet, consectetur 
adipiscing lorem ipsum dolor it.</p>
      </div>
      <div class="col-xs-4 col-sm-4">
        <img src="assets/images/home-carousel-2.jpg" class="img-responsive" align="center">
        <h5>2. Discover the top things to Do</h5>
        <p>Lorem ipsum dolor sit amet, 
consectetur adipiscing Lorem
ipsum dolor sit amet, consectetur 
adipiscing lorem ipsum dolor it.</p>
      </div>
      <div class="col-xs-4 col-sm-4">
        <img src="assets/images/home-carousel-3.jpg" class="img-responsive" align="center">
        <h5>3. Add suggestions</h5>
        <p>Lorem ipsum dolor sit amet, 
consectetur adipiscing Lorem
ipsum dolor sit amet, consectetur 
adipiscing lorem ipsum dolor it.</p>
      </div>
    </div>

                </div>
                <div class="col-md-1"><img src="assets/images/right-arrow.png"></div>

                </div>
          </div>
      </div>
      <br/>
    <br/>
    </div>
   <!-- /.carousel -->

   <!-- /plan your next advanture -->
   <div class="jumbotron home-next-adv">
      <div class="container">
      <h4>Plan your next advanture</h4>
      <p>Lorem ipsum dolor sit amet, at dolor disputando, est home temporibus ad. No per manda semper oblique scripserit est 
ex, ex alii contentiones vix nam ei erat reprehendunt. Ex eros virtut te nulla ornatus, nec ad impedit democritum dissentiet.</p>
          <div class="row">
            <div class="col-xs-6 col-md-4">
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>

            </div>

            <div class="col-xs-6 col-md-4">
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>

            </div>

            <div class="col-xs-6 col-md-4">
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>
              <a href="">Lorem Ipsum here</a>  
              <a href="">Lorem Ipsum here</a>

            </div>
  
          </div>
      </div>
   </div>
   <!-- /plan your next advanture --> 
   <div class="jumbotron home-community">
      <div class="container">
          <h4>our community</h4>
          <p>Lorem ipsum dolor sit amet, at dolor disputando, est home temporibus ad. No per manda semper oblique scripserit est 
ex, ex alii contentiones vix nam ei erat reprehendunt. Ex eros virtut te nulla ornatus, nec ad impedit democritum dissentiet.</p>

<div class="row">
  <div class="col-md-4">
    <img src="assets/images/test1.jpg" class="img-responsive" align="center">
    <p>Lorem ipsum dolor sit amet, est et elitr reprehe
ndunt, id per menandri sadipscing semper obli
que scripserit est ex, ex alii contentiones vix. </p>
  </div>
  
  <div class="col-md-4">
    <img src="assets/images/test2.jpg" class="img-responsive" align="center">
    <p>Lorem ipsum dolor sit amet, est et elitr reprehe
ndunt, id per menandri sadipscing semper obli
que scripserit est ex, ex alii contentiones vix. </p>
  </div>
  <div class="col-md-4">
    <img src="assets/images/test3.jpg" class="img-responsive" align="center">
    <p>Lorem ipsum dolor sit amet, est et elitr reprehe
ndunt, id per menandri sadipscing semper obli
que scripserit est ex, ex alii contentiones vix. </p>
  </div>
</div>
      </div>
   </div>

   <!-- /plan your next advanture -->

   @include('frontend.shared.footer')


   </div>



    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
