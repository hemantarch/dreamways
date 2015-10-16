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
            <li role="presentation"><a href="{!! url('suggestion') !!}">Suggest</a></li>
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
							  	<a href=""> <i class="fa fa-tachometer fa-lg"></i> Who We Are</a>
							  	<a href=""><i class="fa fa-user fa-lg"></i> What We Do</a>
							  	<a href=""><i class="fa fa-list fa-lg"></i>Contact</a>
							  </div>
							  <div class="col-xs-6 col-md-2"></div>
						</div>
      			</div>
    		
    	</div>
    </div>
    
<div class="jumbotron profile">
    <div class="container">
      <div class="row">
            <div class="col-md-2">
            <img src="assets/images/icon3.png" height="100" width="100">
            <a href="">Edit Profile</a>
            </div>
            <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12">
                        <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">First name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="First name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Last name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10">
      <select class="form-control">
        <option>Select Gender</option>
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">DOB</label>
    <div class="form-inline">
      <div class="form-group">
          <div class="col-sm-4">

            <select class="form-control" style="margin-left:16px;">
              <option>Select Date</option>
              <option>Female</option>
              <option>Male</option>
            </select>
          </div>

          <div class="col-sm-4">

            <select class="form-control">
              <option>Select Month</option>
              <option>Female</option>
              <option>Male</option>
            </select>
          </div>

          <div class="col-sm-4">

            <select class="form-control">
              <option>Select Year</option>
              <option>Female</option>
              <option>Male</option>
            </select>
          </div>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Last name">
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Place</label>
    <div class="form-inline">
      <div class="form-group">
          <div class="col-sm-6">

            <select class="form-control" style="margin-left:16px;">
              <option>Select Country</option>
              <option>Female</option>
              <option>Male</option>
            </select>
          </div>

          <div class="col-sm-6">

            <select class="form-control profile-select">
              <option>Select City</option>
              <option>Female</option>
              <option>Male</option>
            </select>
          </div>

          
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Bio</label>
    <div class="col-sm-10">
      <textarea  class="form-control" id="inputEmail3" rows="7" placeholder="Last name"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Time Zone</label>
    <div class="col-sm-10">
      <select class="form-control">
        <option>Select Time Zone</option>
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
  </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>


                  </div>
                </div>
              </div>


            
            <div class="col-md-2">
              
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