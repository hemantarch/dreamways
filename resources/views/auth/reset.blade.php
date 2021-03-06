<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dreamwaves - Admin</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../../backend_assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../../backend_assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../../backend_assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../../backend_assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('../../assets/images/about.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
						 @if (count($errors) > 0)
								<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
								     @foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								     @endforeach

								</ul>
								</div>

					    @endif
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">Reset Your New Password</span>
							<br/><br/>
							
							
							
							{!! Form::open(array('url' => url('password/reset'), 'class'=>'form floating-label')) !!}
    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="token" value="{{ $token }}">

								<div class="form-group">
									<input type="text" class="form-control" id="username" name="email" value="{!! old('email') !!}">
									<label for="username">Email</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<label for="password">Password</label>
									
								</div>

								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password_confirmation">
									<label for="password">Confirm Password </label>
									
								</div>
								<br/>
								<div class="row">
									
									<div class="col-xs-6 text-left">
										<button class="btn btn-primary btn-raised" type="submit">Reset</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->




				<!-- BEGIN JAVASCRIPT -->
				<script src="../../backend_assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="../../backend_assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="../../backend_assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="../../backend_assets/js/libs/spin.js/spin.min.js"></script>
				<script src="../../backend_assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="../../backend_assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="../../backend_assets/js/core/source/App.js"></script>
				<script src="../../backend_assets/js/core/source/AppNavigation.js"></script>
				<script src="../../backend_assets/js/core/source/AppOffcanvas.js"></script>
				<script src="../../backend_assets/js/core/source/AppCard.js"></script>
				<script src="../../backend_assets/js/core/source/AppForm.js"></script>
				<script src="../../backend_assets/js/core/source/AppNavSearch.js"></script>
				<script src="../../backend_assets/js/core/source/AppVendor.js"></script>
				<script src="../../backend_assets/js/core/demo/Demo.js"></script>
				<!-- END JAVASCRIPT -->

			</body>
		</html>
