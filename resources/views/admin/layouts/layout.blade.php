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
<div class="slim-header">
    <div class="container">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="index.html">slim<span>.</span></a></h2>

            <div class="search-box">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
            <div class="dropdown dropdown-c">
                <a href="#" class="logged-user" data-toggle="dropdown">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <span>Katherine</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <nav class="nav">
                        <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                        <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                        <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                        <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                        <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- header-right -->
    </div><!-- container -->
</div><!-- slim-header -->

<div class="slim-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('admin') }}">
                    <i class="icon ion-ios-home-outline"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item mega-dropdown">
                <a class="nav-link" href="{{ url('admin/flights/list-flight') }}">
                    <i class="icon fa fa-calendar"></i>
                    <span>Flights</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/hotels/list-hotel') }}">
                    <i class="icon fa fa-bed"></i>
                    <span>Hotels</span>
                </a>
            </li>
        </ul>
    </div><!-- container -->
</div><!-- slim-navbar -->

@yield('content')

<div class="slim-footer">
    <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
    </div><!-- container -->
</div><!-- slim-footer -->

<script src="{{ asset('admin/lib/jquery/js/jquery.js') }}"></script>
<script src="{{ asset('admin/lib/popper.js/js/popper.js') }}"></script>
<script src="{{ asset('admin/lib/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('admin/lib/jquery.cookie/js/jquery.cookie.js') }}"></script>

@yield('scripts')

</body>
</html>