<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Project Management | Alimo Creative & Tech</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/logo_alimo.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

    {{-- Preloader start --}}
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    {{-- Preloader End --}}

    {{-- Main wrapper / content start --}}
    <div id="main-wrapper">
        @include('template.navbar')
        @include('template.sidebar')
		@yield('content')
        @include('template.footer')
	</div>
    {{-- Main wrapper / content end --}}

    {{------- Start Scripts ------}}
        <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					800:{
						items:1
					},
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});
	</script>
    {{------- End Scripts ------}}

</body>
</html>
