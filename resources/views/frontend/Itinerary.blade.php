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


    <link href="assets/css/hover_effect/demo.css" rel="stylesheet">
    <link href="assets/css/hover_effect/set1.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="assets/css/user.css" rel="stylesheet">
    <link href="assets/css/common.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    


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

        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="      Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        
        <div class="collapse navbar-collapse" id="navbar">

          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="#">Favorites</a></li>
            <li role="presentation"><a href="{!! url('/suggestion') !!}">Suggest</a></li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello User <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
            
          </ul>

          </div>
      
      
    </nav>

    <div class="sub-menu">
    	<div class="container">
    		<div class="row">
      					<div class="row">
							  <div class="col-xs-6 col-md-2"></div>
							  <div class="col-xs-6 col-md-8 sub-nav-about">
							  	<a href="{!! url('about_us') !!}"> <i class="fa fa-tachometer fa-lg"></i> Who We Are</a>
							  	<a href=""><i class="fa fa-user fa-lg"></i> What We Do</a>
							  	<a href="{!! url('contact_us') !!}"><i class="fa fa-list fa-lg"></i>Contact</a>
							  </div>
							  <div class="col-xs-6 col-md-2"></div>
						</div>
      			</div>
    		
    	</div>
    </div>
    
<div class="jumbotron itinerary">
    <div class="container">
      <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="row">
                  <div class="col-md-3"><img src="assets/images/icon3.png" height="100" width="100"></div>
                  <div class="col-md-9">
                    <h4> Stanley’s Itinerary</h4>
                    <a href="">Itinerary: 6</a>

                  </div>
              </div>

              <div class="container itineraries">

                  <div class="content">
                        <div class="grid">
          <figure class="effect-bubba">
            <img src="assets/images/15.jpg" alt="img02"/>
            <figcaption>
              <h2>Fresh <span>Bubba</span></h2>
              <p>Bubba likes to appear out of thin air.</p>
              <a href="#">View more</a>
            </figcaption>     
          </figure>
          <figure class="effect-bubba">
            <img src="assets/images/16.jpg" alt="img16"/>
            <figcaption>
              <h2>Fresh <span>Bubba</span></h2>
              <p>Bubba likes to appear out of thin air.</p>
              <a href="#">View more</a>
            </figcaption>     
          </figure>
          <figure class="effect-bubba">
            <img src="assets/images/16.jpg" alt="img16"/>
            <figcaption>
              <h2>Fresh <span>Bubba</span></h2>
              <p>Bubba likes to appear out of thin air.</p>
              <a href="#">View more</a>
            </figcaption>     
          </figure>
          <figure class="effect-bubba">
            <img src="assets/images/16.jpg" alt="img16"/>
            <figcaption>
              <h2>Fresh <span>Bubba</span></h2>
              <p>Bubba likes to appear out of thin air.</p>
              <a href="#">View more</a>
            </figcaption>     
          </figure>
        </div>
        
                    </div>


                      
              </div>
                
              </div>


            
            <div class="col-md-2">
                <button class="iti-dw-btn btn">Create new Itinerary</button>
            </div>
        
      </div>
    </div>
    </div>

@include('frontend.shared.footer')


   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    
    </body>
    </html>