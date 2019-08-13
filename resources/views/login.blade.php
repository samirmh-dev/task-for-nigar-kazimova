<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="base-url" content="{{ url('/') }}" />

	<!-- Twitter -->
	<meta name="twitter:site" content="@themepixels">
	<meta name="twitter:creator" content="@themepixels">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Slim">
	<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

	<!-- Facebook -->
	<meta property="og:url" content="http://themepixels.me/slim">
	<meta property="og:title" content="Slim">
	<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

	<meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
	<meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<!-- Meta -->
	<meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="author" content="ThemePixels">

	<title>Slim Responsive Bootstrap 4 Admin Template</title>

	<!-- vendor css -->
	<link href="{{ url('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ url('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
	<link href="{{ url('admin/lib/chartist/css/chartist.css') }}" rel="stylesheet">
	<link href="{{ url('admin/lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">

	<!-- Slim CSS -->
	<link rel="stylesheet" href="{{ url('admin/css/slim.css') }}">
	<link href="{{ url('admin/css/dropzone.css') }}" rel="stylesheet">

</head>
<body>

<div class="signin-wrapper">
	{{ Form::open(array('url' => 'login')) }}

	<div class="signin-box">
		<h2 class="slim-logo"><a href="index.html">slim<span>.</span></a></h2>
		<h2 class="signin-title-primary">Welcome back!</h2>
		<h3 class="signin-title-secondary">Sign in to continue.</h3>

		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter your email">
		</div><!-- form-group -->
		<div class="form-group mg-b-50">
			<input type="password" class="form-control" placeholder="Enter your password">
		</div><!-- form-group -->
		<button class="btn btn-primary btn-block btn-signin">Sign In</button>
		<p class="mg-b-0">Don't have an account? <a href="page-signup.html">Sign Up</a></p>
	</div><!-- signin-box -->
	<p>
		{{ $errors->first('email') }}
		{{ $errors->first('password') }}
	</p>

	<p>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}

</div><!-- signin-wrapper -->

<script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
<script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>

<script src="{{ asset('js/slim.js') }}"></script>

</body>
</html>
