<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/chartist/css/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ url('admin/css/slim.css') }}">

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
                <a class="nav-link" href="#">
                    <i class="icon fa fa-bed"></i>
                    <span>Hotels</span>
                </a>
            </li>
        </ul>
    </div><!-- container -->
</div><!-- slim-navbar -->

<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item">Flights</li>
                <li class="breadcrumb-item active" aria-current="page">Create Flights</li>
            </ol>
            <h6 class="slim-pagetitle">Create Flights</h6>
        </div><!-- slim-pageheader -->

        <form action="form-validation.html" data-parsley-validate>
            <div class="row no-gutters wd-300">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Company name: <span class="tx-danger">*</span></label>
                        <input type="text" name="company-name" class="form-control wd-250" placeholder="Hogwarts..." required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Airplane type: <span class="tx-danger">*</span></label>
                        <input type="text" name="airplane-type" class="form-control wd-250" placeholder="Broom..." required>
                    </div>
                </div>
                <div class="col-md-12 mg-b-30">
                    <label>Departure time: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="col-md-12 mg-b-30">
                    <label>Arrival time:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Price: <span class="tx-danger">*</span></label>
                        <input type="text" name="airplane-type" class="form-control wd-250" placeholder="How much galleons?" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Destination Point: <span class="tx-danger"></span></label>
                        <input type="text" name="airplane-type" class="form-control wd-250" placeholder="Amsterdam..." required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Departure Point: <span class="tx-danger"></span></label>
                        <input type="text" name="airplane-type" class="form-control wd-250" placeholder="Baku..." required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Passengers: <span class="tx-danger"></span></label>
                        <input type="number" name="airplane-type" class="form-control wd-250" placeholder="2..." required>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="form-group mg-t--1 mg-md-t-0">
                        <label>Description: </label>
                        <textarea rows="3" class="form-control mg-t-20" placeholder="Some Avada Kedavra here..."></textarea>
                    </div>
                </div>
                <div class="col-md-12 mg-t--1 mg-md-t-0">
                    <button type="submit" class="btn btn-primary pd-x-20">Submit</button>
                </div>
            </div>
        </form>

    </div><!-- container -->
</div><!-- slim-mainpanel -->

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
{{--<script src="{{ asset('admin/lib/chartist/js/chartist.js') }}"></script>--}}
{{--<script src="{{ asset('admin/lib/d3/js/d3.js') }}"></script>--}}
{{--<script src="{{ asset('admin/lib/rickshaw/js/rickshaw.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js') }}"></script>--}}

<script src="{{ asset('admin/lib/moment/js/moment.js') }}"></script>
<script src="{{ asset('admin/lib/jquery-ui/js/jquery-ui.js') }}"></script>


{{--<script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/dashboard.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/slim.js') }}"></script>--}}

<script>
    $(function(){
        'use strict';

        // Datepicker
        $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
        });

    });
</script>
</body>
</html>
