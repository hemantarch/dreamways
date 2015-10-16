<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dreamways</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="../backend_assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="../backend_assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="../backend_assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="../backend_assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="../backend_assets/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="../backend_assets/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOCKED SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('../assets/images/about.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-xs style-transparent">
				<div class="card-body">
				

				 @if (session('status'))
      <div class="alert alert-success">
             {{ session('status') }}
      </div>
    @endif

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
						<div class="col-sm-12">
							
							<h2>Enter Registered Email</h2>
							
							
						{!! Form::open(array('url' => url('password/email'), 'class'=>'form')) !!}
    							{!! csrf_field() !!}
								<div class="form-group floating-label">
									<div class="input-group">
										<div class="input-group-content">
											<input type="email" id="email" class="form-control" name="email">
											<label for="password">Email</label>
											
										</div>
										<div class="input-group-btn">
											<button class="btn btn-floating-action btn-primary" type="submit"><i class="fa fa-unlock"></i></button>
										</div>
									</div><!--end .input-group -->
								</div><!--end .form-group -->
							</form>
						</div><!--end .col -->
					</div><!--end .row -->
				</div><!--end .card-body -->
			</div><!--end .card -->
		</section>
		<!-- END LOCKED SECTION -->

		<!-- BEGIN JAVASCRIPT -->
		<script src="../backend_assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="../backend_assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="../backend_assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="../backend_assets/js/libs/spin.js/spin.min.js"></script>
		<script src="../backend_assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="../backend_assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="../backend_assets/js/core/source/App.js"></script>
		<script src="../backend_assets/js/core/source/AppNavigation.js"></script>
		<script src="../backend_assets/js/core/source/AppOffcanvas.js"></script>
		<script src="../backend_assets/js/core/source/AppCard.js"></script>
		<script src="../backend_assets/js/core/source/AppForm.js"></script>
		<script src="../backend_assets/js/core/source/AppNavSearch.js"></script>
		<script src="../backend_assets/js/core/source/AppVendor.js"></script>
		<script src="../backend_assets/js/core/demo/Demo.js"></script>
		<!-- END JAVASCRIPT -->

	</body>
</html>
