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

	<!-- Document Title
	============================================= -->
	<title>Travel</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">

			<div class="slider-parallax-inner">

				<div class="fslider" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
					<div class="flexslider" style="height: 100% !important;">
						<div class="slider-wrap" style="height: inherit;">
							<div class="slide" style="background: url('images/slider/1.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('images/slider/2.jpg') center center; background-size: cover; height: 100% !important;"></div>
							<div class="slide" style="background: url('images/slider/3.jpg') center center; background-size: cover; height: 100% !important;"></div>
						</div>
					</div>
				</div>

				<div id="travel-slider-overlay">

					<div class="vertical-middle">

						<div class="container clearfix">

							<div class="tabs travel-organiser-tabs clearfix">

								<ul class="tab-nav clearfix">
									<li><a href="#tab-flights"><i class="icon-plane"></i><span class="d-none d-md-inline-block">Flights</span></a></li>
									<li><a href="#tab-hotels"><i class="icon-building"></i><span class="d-none d-md-inline-block">Hotels</span></a></li>
								</ul>

								<div class="tab-container">

									<div class="tab-content clearfix" id="tab-flights">
										<div class="heading-block nobottomborder bottommargin-sm clearfix">
											<h4 class="fleft">Book your Flights</h4>
											<div class="clear"></div>
										</div>
										<form action="{{ url('flight-results') }}" method="get" class="nobottommargin">
											<div class="row">
												<div class="col-md-6 col-12 bottommargin-sm">
													<label for="">From</label>
													<input id="departure" name="departure_point" type="text" value="" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
												</div>
												<div class="col-md-6 col-12 bottommargin-sm">
													<label for="">To</label>
													<input id="destination" name="destination_point" type="text" value="" class="sm-form-control" placeholder="Eg. New York, United States">
												</div>
												<div class="clear"></div>
												<div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
													<div class="row">
														<div class="col-md-6 col-6">
															<label for="">Departure</label>
															<div class="input-group">
																<input type="text" class="tleft form-control fc-datepicker" name="departure_time" placeholder="MM/DD/YYYY">
															</div>
														</div>
														<div class="col-md-6 col-6">
															<label for="">Return</label>
															<div class="input-group">
																<input type="text" class="form-control tleft fc-datepicker" placeholder="MM/DD/YYYY" name="return_time">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 bottommargin-sm">
													<label for="">Adults</label>
													<input type="number" min="1" max="10" value="" class="sm-form-control" name="passengers" placeholder="2">
												</div>
												<div class="col-md-12">
													<button class="button button-3d nomargin rightmargin-sm">Search Flights</button>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-content clearfix" id="tab-hotels">
										<div class="heading-block nobottomborder bottommargin-sm clearfix">
											<h4 class="fleft">Book your Hotels</h4>
											<div class="clear"></div>
										</div>
										<form action="{{ url('hotel-results') }}" method="get" class="nobottommargin">
											<div class="row">
												<div class="col-md-12 bottommargin-sm">
													<label for="">City</label>
													<input id="city" name="city" type="text" value="" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
												</div>
												<div class="input-daterange travel-date-group col-md-9 bottommargin-sm">
													<div class="row">
														<div class="col-md-6 col-6">
															<label for="">Departure</label>
															<div class="input-group">
																<input type="text" class="tleft form-control fc-datepicker" name="departure_time" placeholder="MM/DD/YYYY">
															</div>
														</div>
														<div class="col-md-6 col-6">
															<label for="">Return</label>
															<div class="input-group">
																<input type="text" class="form-control tleft fc-datepicker" placeholder="MM/DD/YYYY" name="return_time">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3 bottommargin-sm">
													<label for="">Rooms</label>
													<input type="number" min="1" max="10" value="" class="sm-form-control" name="rooms" placeholder="2">
												</div>
												<div class="col-md-12">
													<button class="button button-3d nomargin rightmargin-sm">Search Hotels</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div><!-- #wrapper end -->

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

	<script src="{{ asset('admin/lib/moment/js/moment.js') }}"></script>
	<script src="{{ asset('admin/lib/jquery-ui/js/jquery-ui.js') }}"></script>

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
	<script>
		function autocomplete(inp, arr) {
			/*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
			var currentFocus;
			/*execute a function when someone writes in the text field:*/
			inp.addEventListener("input", function(e) {
				var a, b, i, val = this.value;
				/*close any already open lists of autocompleted values*/
				closeAllLists();
				if (!val) { return false;}
				currentFocus = -1;
				/*create a DIV element that will contain the items (values):*/
				a = document.createElement("DIV");
				a.setAttribute("id", this.id + "autocomplete-list");
				a.setAttribute("class", "autocomplete-items");
				/*append the DIV element as a child of the autocomplete container:*/
				this.parentNode.appendChild(a);
				/*for each item in the array...*/
				for (i = 0; i < arr.length; i++) {
					/*check if the item starts with the same letters as the text field value:*/
					if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
						/*create a DIV element for each matching element:*/
						b = document.createElement("DIV");
						/*make the matching letters bold:*/
						b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
						b.innerHTML += arr[i].substr(val.length);
						/*insert a input field that will hold the current array item's value:*/
						b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
						/*execute a function when someone clicks on the item value (DIV element):*/
						b.addEventListener("click", function(e) {
							/*insert the value for the autocomplete text field:*/
							inp.value = this.getElementsByTagName("input")[0].value;
							/*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
							closeAllLists();
						});
						a.appendChild(b);
					}
				}
			});
			/*execute a function presses a key on the keyboard:*/
			inp.addEventListener("keydown", function(e) {
				var x = document.getElementById(this.id + "autocomplete-list");
				if (x) x = x.getElementsByTagName("div");
				if (e.keyCode == 40) {
					/*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
					currentFocus++;
					/*and and make the current item more visible:*/
					addActive(x);
				} else if (e.keyCode == 38) { //up
					/*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
					currentFocus--;
					/*and and make the current item more visible:*/
					addActive(x);
				} else if (e.keyCode == 13) {
					/*If the ENTER key is pressed, prevent the form from being submitted,*/
					e.preventDefault();
					if (currentFocus > -1) {
						/*and simulate a click on the "active" item:*/
						if (x) x[currentFocus].click();
					}
				}
			});
			function addActive(x) {
				/*a function to classify an item as "active":*/
				if (!x) return false;
				/*start by removing the "active" class on all items:*/
				removeActive(x);
				if (currentFocus >= x.length) currentFocus = 0;
				if (currentFocus < 0) currentFocus = (x.length - 1);
				/*add class "autocomplete-active":*/
				x[currentFocus].classList.add("autocomplete-active");
			}
			function removeActive(x) {
				/*a function to remove the "active" class from all autocomplete items:*/
				for (var i = 0; i < x.length; i++) {
					x[i].classList.remove("autocomplete-active");
				}
			}
			function closeAllLists(elmnt) {
				/*close all autocomplete lists in the document,
                except the one passed as an argument:*/
				var x = document.getElementsByClassName("autocomplete-items");
				for (var i = 0; i < x.length; i++) {
					if (elmnt != x[i] && elmnt != inp) {
						x[i].parentNode.removeChild(x[i]);
					}
				}
			}
			/*execute a function when someone clicks in the document:*/
			document.addEventListener("click", function (e) {
				closeAllLists(e.target);
			});
		}
		const cities = {!! $cities !!};
		autocomplete(document.getElementById("departure"), cities);
		autocomplete(document.getElementById("destination"), cities);
		autocomplete(document.getElementById("city"), cities);
	</script>
</body>
</html>