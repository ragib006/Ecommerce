<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('extra')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('extra')}}/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="{{asset('extra')}}/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('extra')}}/css/style-responsive.css" rel="stylesheet">
	<link href='{{asset('extra')}}' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->


</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>

          <p class="alert-danger">
                  <?php
                  $exception=Session::get('exception');
                  if($exception)
                  {
                  echo $exception;
                  Session::put('exception',null);
                  }
                  ?>
                  </p>



					<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">
					{{ csrf_field() }}


						<fieldset>

							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email"  type="email" placeholder="Enter Email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password"  type="password" placeholder="Enter password"/>
							</div>




							<div class="button-login">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>
				</div><!--/span-->
			</div><!--/row-->


	</div><!--/.fluid-container-->

		</div><!--/fluid-row-->

	<!-- start: JavaScript-->

		<script src="{{asset('extra')}}/js/jquery-1.9.1.min.js"></script>
	<script src="{{asset('extra')}}/js/jquery-migrate-1.0.0.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery-ui-1.10.0.custom.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.ui.touch-punch.js"></script>

		<script src="{{asset('extra')}}/js/modernizr.js"></script>

		<script src="{{asset('extra')}}/js/bootstrap.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.cookie.js"></script>

		<script src='{{asset('extra')}}/js/fullcalendar.min.js'></script>

		<script src='{{asset('extra')}}/js/jquery.dataTables.min.js'></script>

		<script src="{{asset('extra')}}/js/excanvas.js"></script>
	<script src="{{asset('extra')}}/js/jquery.flot.js"></script>
	<script src="{{asset('extra')}}/js/jquery.flot.pie.js"></script>
	<script src="{{asset('extra')}}/js/jquery.flot.stack.js"></script>
	<script src="{{asset('extra')}}/js/jquery.flot.resize.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.chosen.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.uniform.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.cleditor.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.noty.js"></script>

		<script src="{{asset('extra')}}/js/jquery.elfinder.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.raty.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.iphone.toggle.js"></script>

		<script src="{{asset('extra')}}/js/jquery.uploadify-3.1.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.gritter.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.imagesloaded.js"></script>

		<script src="{{asset('extra')}}/js/jquery.masonry.min.js"></script>

		<script src="{{asset('extra')}}/js/jquery.knob.modified.js"></script>

		<script src="{{asset('extra')}}/js/jquery.sparkline.min.js"></script>

		<script src="{{asset('extra')}}/js/counter.js"></script>

		<script src="{{asset('extra')}}/js/retina.js"></script>

		<script src="{{asset('extra')}}/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>
