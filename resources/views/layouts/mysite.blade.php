<!DOCTYPE html>
{{-- <html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"> --}}
<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ITMEDICA</title>
		<link rel="stylesheet" href="{{ asset('site/vendors/mdi/css/materialdesignicons.min.cs') }}s">
		<link rel="stylesheet" href="{{ asset('site/vendors/owl.carousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('site/vendors/owl.carousel/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('site/vendors/aos/css/aos.css') }}">
		<link rel="stylesheet" href="{{ asset('site/vendors/jquery-flipster/css/jquery.flipster.css') }}">
		<link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
		<link rel="shortcut icon" href="{{ asset('site/images/favicon.png') }}" />
		@if (app()->getLocale() == 'ar')
			<link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
			<style>
				body, h1, h2, h3, h4, h5, h6{
					font-family: 'Cairo', sans-serif !important;
				}
				*{
					font-family: 'Cairo', sans-serif !important;
					direction: rtl !important;
					text-align: right;
				}
			</style>
		@endif
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		@include('partials.navbar')
		@yield('content')
		@include('partials.footer')
		<script src="{{ asset('site/vendors/base/vendor.bundle.base.js') }}"></script>
		<script src="{{ asset('site/vendors/owl.carousel/js/owl.carousel.js') }}"></script>
		<script src="{{ asset('site/vendors/aos/js/aos.js') }}"></script>
		<script src="{{ asset('site/vendors/jquery-flipster/js/jquery.flipster.min.js') }}"></script>
		<script src="{{ asset('site/js/template.js') }}"></script>
		<script>
			$('.owl-carousel').owlCarousel({
				rtl:true,
				loop:true,
				margin:10,
				// nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})
		</script>
	</body>
</html>