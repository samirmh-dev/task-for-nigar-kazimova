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
    <link href="{{ url('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ url('admin/lib/chartist/css/chartist.css') }}" rel="stylesheet">
    <link href="{{ url('admin/lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">

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
                <li class="breadcrumb-item active" aria-current="page">Flights</li>
            </ol>
            <h6 class="slim-pagetitle">Flights</h6>
        </div><!-- slim-pageheader -->

        <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0" style="padding: 0;">
            <a href="{{ url('admin/flights/create-flight') }}" class="btn btn-purple btn-block mg-b-10">+ Create Flight</a>
        </div><!-- col-sm-3 -->

        <div class="section-wrapper">
            <div class="table-responsive">
                <table class="table mg-b-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company</th>
                        <th>Airplane type</th>
                        <th>Dep. time</th>
                        <th>Ar. time</th>
                        <th>Price</th>
                        <th>Dest. point</th>
                        <th>Dep. point</th>
                        <th>Passengers</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>Dest. point</td>
                        <td>Dep. point</td>
                        <td>Passengers</td>
                        <td>
                            <a href="{{ url('admin/flights/view-flight') }}" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('admin/flights/edit-flight') }}" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>Dest. point</td>
                        <td>Dep. point</td>
                        <td>Passengers</td>
                        <td>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Company</td>
                        <td>Airplane type</td>
                        <td>Dep. time</td>
                        <td>Ar. time</td>
                        <td>Price</td>
                        <td>Dest. point</td>
                        <td>Dep. point</td>
                        <td>Passengers</td>
                        <td>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-eye"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-pencil"></i></a>
                            <a href="#" style="margin-right: 10px"><i class="icon ion-trash-a"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

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
<script src="{{ asset('admin/lib/chartist/js/chartist.js') }}"></script>
<script src="{{ asset('admin/lib/d3/js/d3.js') }}"></script>
<script src="{{ asset('admin/lib/rickshaw/js/rickshaw.min.js') }}"></script>
<script src="{{ asset('admin/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('admin/js/ResizeSensor.js') }}"></script>
<script src="{{ asset('admin/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/js/slim.js') }}"></script>
</body>
</html>
