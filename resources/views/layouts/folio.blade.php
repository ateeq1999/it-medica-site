<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITMEDICA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('folio/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('folio/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('folio/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('folio/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('folio/assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('folio/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('folio/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('folio/assets/css/style.css') }}" rel="stylesheet">

  @if (app()->getLocale() == 'ar')
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <style>
        body, h1, h2, h3, h4, h5, h6{
            font-family: 'Cairo', sans-serif !important;
        }
        *{
            font-family: 'Cairo', sans-serif !important;
            direction: rtl !important;
            /* text-align: right; */
        }
    </style>
@endif

</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  @include('partials.folio.navbar')

  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('partials.folio.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('folio/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/counterup/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('folio/assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('folio/assets/js/main.js') }}"></script>

</body>

</html>