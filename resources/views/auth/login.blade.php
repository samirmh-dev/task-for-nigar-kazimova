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
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="signin-box">
            <h2 class="slim-logo"><a href="index.html">slim<span>.</span></a></h2>
            <h2 class="signin-title-primary">Welcome back!</h2>
            <h3 class="signin-title-secondary">Sign in to continue.</h3>

            <div class="form-group">
                {{ __('E-Mail Address') }}
                <input type="text" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
                @endif
            </div><!-- form-group -->
            <div class="form-group mg-b-50">
                {{ __('Password') }}
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
                @endif
            </div><!-- form-group -->
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-signin">Sign In</button>
        </div><!-- signin-box -->
    </form>

</div><!-- signin-wrapper -->

<script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
<script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>

<script src="{{ asset('js/slim.js') }}"></script>

</body>
</html>
