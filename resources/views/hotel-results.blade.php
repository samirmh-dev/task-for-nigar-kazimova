<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/dark.css') }}" type="text/css" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ url('css/travel.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/datepicker.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ url('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ url('css/responsive.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ url('admin/css/slim.css') }}">
	<link rel="stylesheet" href="{{ url('css/autocomplete.css') }}">
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
				<h1>{{ $results->total() }} Hotels Found</h1>
				<span><i class="icon-map-marker"></i> {{ $city }}</span>
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
									<div class="col-lg-4">
										@if($result->image)
										<a href="images/hotels/1.jpg" data-lightbox="image"><img class="image_fade" src="{{ url('images/'.$result->image) }}" alt="{{ $result->hotel_name }}"></a>
										@else
										<div class="fslider" data-pagi="false" data-lightbox="gallery">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide"><a href="images/hotels/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/hotels/2.jpg" alt="Standard Post with Gallery"></a></div>
													<div class="slide"><a href="images/hotels/2-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/hotels/2-1.jpg" alt="Standard Post with Gallery"></a></div>
													<div class="slide"><a href="images/hotels/2-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/hotels/2-2.jpg" alt="Standard Post with Gallery"></a></div>
												</div>
											</div>
										</div>
										@endif
									</div>
									<div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
									<div class="col-lg-6 col-md-8">
										<div class="entry-c">
											<div class="entry-title">
												<h2><a href="blog-single.html">{{ $result->hotel_name }}</a></h2>
											</div>
											<ul class="entry-meta clearfix">

											@if($result->stars == 1)
											<li><i class="icon-star3 color"></i>
											@elseif($result->stars == 2)
											<li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i></li>
											@elseif($result->stars == 3)
											<li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i><i class="icon-star3 color"></i></li>
											@elseif($result->stars == 4)
											<li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i><i class="icon-star3 color"></i><i class="icon-star3 color"></i></li>
											@elseif($result->stars == 5)
											<li><i class="icon-star3 color"></i> <i class="icon-star3 color"></i><i class="icon-star3 color"></i><i class="icon-star3 color"></i></li></li>
											@else
														<li></li>
											@endif
												<li><i class="icon-line-map"></i><a href="#"> {{ $result->city }}</a></li>
												<li><i class="icon-map-marker2"></i> <a href="{{ url($result->address) }}" data-lightbox="iframe">View map</a></li>
											</ul>
											<div class="entry-content">
												<div class="clearfix" style="margin-bottom: 10px;">
													<i class="i-rounded i-small i-bordered icon-wifi-full"  data-toggle="tooltip" data-placement="top" title="WiFi"></i>
													<i class="i-rounded i-small i-bordered icon-glass"  data-toggle="tooltip" data-placement="top" title="Bar"></i>
													<i class="i-rounded i-small i-bordered icon-line-shuffle"  data-toggle="tooltip" data-placement="top" title="Air Conditioner"></i>
													<i class="i-rounded i-small i-bordered icon-food"  data-toggle="tooltip" data-placement="top" title="Restaurant"></i>
													<i class="i-rounded i-small i-bordered noborder i-light icon-barbell"  data-toggle="tooltip" data-placement="top" title="Gym Unavailable"></i>
													<i class="i-rounded i-small i-bordered icon-bell"  data-toggle="tooltip" data-placement="top" title="Room Service"></i>
													<i class="i-rounded i-small i-bordered noborder i-light icon-coffee2"  data-toggle="tooltip" data-placement="top" title="Cafe Unavailable"></i>
												</div>
												<p class="nobottommargin">{{ $result->description }}</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 center">
										<div class="hotel-price">
											<i class="icon-dollar"></i>{{ $result->price }}
										</div>
										<small><em>Price per night*</em></small><br>
										<a href="#"class="button button-rounded topmargin-sm">Book Now</a>
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
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

	<!-- Travel Demo Specific Script -->
	<script src="{{ asset('js/datepicker.js') }}"></script>
	<!-- / -->

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