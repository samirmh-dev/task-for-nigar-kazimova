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
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="slim-pagetitle">Dashboard</h6>
    </div><!-- slim-pageheader -->

    <div class="dash-headline">
      <div class="dash-headline-left">
        <div class="dash-headline-item-one">
          <div id="chartArea1" class="dash-chartist"></div>
          <div class="dash-item-overlay">
            <h1>0.0345 <span class="tx-24">BTC</span></h1>
            <p class="earning-label">Bitcoin Earnings</p>
            <p class="earning-desc">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
            <a href="#" class="statement-link">View Statements <i class="fa fa-angle-right mg-l-5"></i></a>
          </div>
        </div><!-- dash-headline-item-one -->
      </div><!-- dash-headline-left -->

      <div class="dash-headline-right">
        <div class="dash-headline-right-top">
          <div class="dash-headline-item-two">
            <div id="chartMultiBar1" class="chart-rickshaw"></div>
            <div class="dash-item-overlay">
              <h4>0.0873 <span class="tx-20">ETH</span></h4>
              <p class="item-label">Ethereum Wallet</p>
              <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
              <a href="#" class="report-link">View Report <i class="fa fa-angle-right mg-l-5"></i></a>
            </div>
          </div><!-- dash-headline-item-two -->
        </div><!-- dash-headline-right-top -->
        <div class="dash-headline-right-bottom">
          <div class="dash-headline-right-bottom-left">
            <div class="dash-headline-item-three">
              <span id="sparkline3" class="sparkline wd-100p">1,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
              <div>
                <h1>29,931</h1>
                <p class="item-label">Male Visitors</p>
                <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
              </div>
            </div><!-- dash-headline-item-three -->
          </div><!-- dash-headline-right-bottom-left -->
          <div class="dash-headline-right-bottom-right">
            <div class="dash-headline-item-three">
              <span id="sparkline4" class="sparkline wd-100p">1,4,4,7,5,7,4,3,4,4,6,5,9,7</span>
              <div>
                <h1>45,231</h1>
                <p class="item-label">Female Visitors</p>
                <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
              </div>
            </div><!-- dash-headline-item-three -->
          </div><!-- dash-headline-right-bottom-right -->
        </div><!-- dash-headline-right-bottom -->
      </div><!-- wd-50p -->
    </div><!-- d-flex ht-100v -->

    <div class="card card-dash-one mg-t-20">
      <div class="row no-gutters">
        <div class="col-lg-3">
          <i class="icon ion-ios-analytics-outline"></i>
          <div class="dash-content">
            <label class="tx-primary">Impressions</label>
            <h2>822,490</h2>
          </div><!-- dash-content -->
        </div><!-- col-3 -->
        <div class="col-lg-3">
          <i class="icon ion-ios-pie-outline"></i>
          <div class="dash-content">
            <label class="tx-success">Page Visits</label>
            <h2>465,183</h2>
          </div><!-- dash-content -->
        </div><!-- col-3 -->
        <div class="col-lg-3">
          <i class="icon ion-ios-stopwatch-outline"></i>
          <div class="dash-content">
            <label class="tx-purple">Commision</label>
            <h2>781,524</h2>
          </div><!-- dash-content -->
        </div><!-- col-3 -->
        <div class="col-lg-3">
          <i class="icon ion-ios-world-outline"></i>
          <div class="dash-content">
            <label class="tx-danger">Earnings</label>
            <h2>369,657</h2>
          </div><!-- dash-content -->
        </div><!-- col-3 -->
      </div><!-- row -->
    </div><!-- card -->

    <div class="row row-sm mg-t-20">
      <div class="col-lg-6">
        <div class="card card-table">
          <div class="card-header">
            <h6 class="slim-card-title">Product Purchases</h6>
          </div><!-- card-header -->
          <div class="table-responsive">
            <table class="table mg-b-0 tx-13">
              <thead>
              <tr class="tx-10">
                <th class="wd-10p pd-y-5">&nbsp;</th>
                <th class="pd-y-5">Item Details</th>
                <th class="pd-y-5 tx-right">Sold</th>
                <th class="pd-y-5">Gain</th>
                <th class="pd-y-5 tx-center">Actions</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
                  <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                </td>
                <td class="valign-middle tx-right">3,345</td>
                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                <td class="valign-middle tx-center">
                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
                  <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                </td>
                <td class="valign-middle tx-right">720</td>
                <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                <td class="valign-middle tx-center">
                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
                  <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                </td>
                <td class="valign-middle tx-right">1,445</td>
                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                <td class="valign-middle tx-center">
                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                  <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                </td>
                <td class="valign-middle tx-right">2,500</td>
                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                <td class="valign-middle tx-center">
                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                </td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
                  <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                </td>
                <td class="valign-middle tx-14 tx-right">223</td>
                <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                <td class="valign-middle tx-center">
                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                </td>
              </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <div class="card-footer tx-12 pd-y-15 bg-transparent">
            <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col-6 -->
      <div class="col-lg-6 mg-t-20 mg-lg-t-0">
        <div class="card card-table">
          <div class="card-header">
            <h6 class="slim-card-title">User Transaction History</h6>
          </div><!-- card-header -->
          <div class="table-responsive">
            <table class="table mg-b-0 tx-13">
              <thead>
              <tr class="tx-10">
                <th class="wd-10p pd-y-5">&nbsp;</th>
                <th class="pd-y-5">User</th>
                <th class="pd-y-5">Type</th>
                <th class="pd-y-5">Date</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                  <span class="tx-11 d-block">TRANSID: 1234567890</span>
                </td>
                <td class="tx-12">
                  <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                </td>
                <td>Just Now</td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                  <span class="tx-11 d-block">TRANSID: 1234567890</span>
                </td>
                <td class="tx-12">
                  <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                </td>
                <td>Apr 21, 2017 8:34am</td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                  <span class="tx-11 d-block">TRANSID: 1234567890</span>
                </td>
                <td class="tx-12">
                  <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                </td>
                <td>Apr 10, 2017 4:40pm</td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                  <span class="tx-11 d-block">TRANSID: 1234567890</span>
                </td>
                <td class="tx-12">
                  <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                </td>
                <td>Apr 02, 2017 6:45pm</td>
              </tr>
              <tr>
                <td class="pd-l-20">
                  <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                </td>
                <td>
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                  <span class="tx-11 d-block">TRANSID: 1234567890</span>
                </td>
                <td class="tx-12">
                  <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                </td>
                <td>Mar 30, 2017 10:30am</td>
              </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
          <div class="card-footer tx-12 pd-y-15 bg-transparent">
            <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
          </div><!-- card-footer -->
        </div><!-- card -->
      </div><!-- col-6 -->
    </div><!-- row -->

    <div class="row row-sm mg-t-20">
      <div class="col-lg-4">
        <div class="card card-info">
          <div class="card-body pd-40">
            <div class="d-flex justify-content-center mg-b-30">
              <img src="../img/icon1.svg" class="wd-100" alt="">
            </div>
            <h5 class="tx-inverse mg-b-20">Safe &amp; Secure</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
            <a href="" class="btn btn-primary btn-block">Getting Started</a>
          </div><!-- card -->
        </div><!-- card -->
      </div><!-- col-4 -->
      <div class="col-lg-4 mg-t-20 mg-lg-t-0">
        <div class="card card-info">
          <div class="card-body pd-40">
            <div class="d-flex justify-content-center mg-b-30">
              <img src="../img/icon2.svg" class="wd-100" alt="">
            </div>
            <h5 class="tx-inverse mg-b-20">Instant Exchange</h5>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
            <a href="" class="btn btn-primary btn-block">Take a Tour</a>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-4 -->
      <div class="col-lg-4 mg-t-20 mg-lg-t-0">
        <div class="card card-sales">
          <h6 class="slim-card-title tx-primary">Sales Report</h6>
          <div class="row">
            <div class="col">
              <label class="tx-12">Today</label>
              <p>1,898</p>
            </div><!-- col -->
            <div class="col">
              <label class="tx-12">This Week</label>
              <p>32,112</p>
            </div><!-- col -->
            <div class="col">
              <label class="tx-12">This Month</label>
              <p>72,067</p>
            </div><!-- col -->
          </div><!-- row -->

          <div class="progress mg-b-5">
            <div class="progress-bar bg-primary wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
          <p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
        </div><!-- card -->

        <div class="card card-impression mg-t-20">
          <div class="card-body pd-b-0">
            <h6 class="slim-card-title tx-primary">Page Impressions</h6>
            <h2 class="tx-lato tx-inverse">323,360</h2>
            <p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
          </div><!-- card-body -->
          <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
        </div><!-- card -->
      </div><!-- col-4 -->
    </div><!-- row -->

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
