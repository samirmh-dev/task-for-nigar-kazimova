<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/travel.css" type="text/css" />

	<link rel="stylesheet" href="css/datepicker.css" type="text/css" />

	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Search results</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-center page-title-parallax page-title-dark" style="background-image: url('images/hotels/page-title.jpg'); background-position: center center; padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>{{ $results->total() }} Flights Found</h1>
				<span>Baku &nbsp;&nbsp;<i class="icon-map-marker"></i>&nbsp;&nbsp; London</span>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last clearfix" style="width: 100%">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs">
						@if($results)
							@foreach($results as $result)
							<div class="entry clearfix">
								<div class="row clearfix">
									<div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
									<div class="col-lg-10 col-md-8">
										<div class="entry-c">
											<div class="entry-title">
												<h2><a href="blog-single.html">{{ $result->company_name }}</a></h2>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-plane"></i><a href="#"> {{ $result->airplane_type }}</a></li>
												<li><i class="icon-time"></i><a href="#"> Estimate arrival: {{ date('F d, Y, h:m', strtotime($result->estimate_arrival)) }}</a></li>
											</ul>
											<div class="entry-content">
												<p class="nobottommargin">
													{{ $result->description }}
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 center">
										<div class="hotel-price">
											<i class="icon-dollar"></i>{{ $result->price }}
										</div>
										<small><em>Price per person*</em></small><br>
										<a href="#"class="button button-rounded topmargin-sm">Buy ticket</a>
									</div>
								</div>
							</div>
							@endforeach
							@else
								<h3>no matches to your search</h3>
						@endif
						</div>

						<ul class="pagination notopmargin nobottommargin">
							{{ $results->links() }}
							{{--<li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
							{{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
							{{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
							{{--<li class="page-item"><a class="page-link" href="#">4</a></li>--}}
						</ul>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Travel Demo Specific Script -->
	<script src="js/datepicker.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startDate: "today"
			});
		});
	</script>

</body>
</html>