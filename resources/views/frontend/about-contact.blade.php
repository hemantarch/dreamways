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
    <link href="assets/css/about.css" rel="stylesheet">
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
          <img src="assets/images/main-logo.png">
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
    <div class="jumbotron head-jumbotron">
      <div class="about-sub-menu">
      		<div class="container">
      			<div class="row">
      					<div class="row">
							  <div class="col-xs-6 col-md-2">.col-xs-6 .col-md-2</div>
							  <div class="col-xs-6 col-md-8 sub-nav-about">
							  	<a href="">Who We Are</a>
							  	<a href="">What We Do</a>
							  	<a href="">Contact</a>
							  </div>
							  <div class="col-xs-6 col-md-2">.col-xs-6 .col-md-2</div>
						</div>
      			</div>
      		</div>
      </div>
    </div>


    <!-- Page Body -->

    <div class="container about-body">
    	<div class="row">
    	<h5>We Are Here to Help!</h5>
    	<hr/>
    			<div class="col-md-6">
    							<div class="row">
    								<div class="col-md-6"></div>
    								<div class="col-md-6">
											<form>
												  <div class="form-group">
												    <label for="exampleInputEmail1">Full Name</label>
												    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">Email</label>
												    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">Phone</label>
												    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">Message</label>
												    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												  </div>
												  <div class="form-group">
												    <label for="exampleInputPassword1">How did you haer about us</label>
												    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												  </div>
												  
												  <button type="submit" class="btn">Submit</button>
											</form>
    								</div>


    				
    							</div>
  				
    			</div>
    			<div class="col-md-6 abt-info">
    					<p>
    						<span>Email</span>
    						<h5>dw.debriano@dreamways.co</h5>
    					</p>
    					<p>
    						<span>Call</span>
    						<h5>+41-799-627-175</h5>
    					</p>
    					<p>
    						<span>Follow Us On</span>
			<div class="abt-socials">
              <a href=""><img src="assets/images/facebook-abt.jpg"></a>
              <a href=""><img src="assets/images/twitter-abt.jpg"></a>
              <a href=""><img src="assets/images/pintrest-abt.jpg"></a>
            </div>
    					</p>
    			</div>
    </div>
    </div>

    <!-- Page Body -->
    
@include('frontend.shared.footer')
   


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
