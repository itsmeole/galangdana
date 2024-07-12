<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Disnaker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage') }}/assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/price_rangs.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/slick.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('storage') }}/assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    @include('header.header1')

    @yield('content')

    @include('footer.footer')

  <!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('storage') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('storage') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('storage') }}/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('storage') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/slick.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/price_rangs.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('storage') }}/assets/js/wow.min.js"></script>
		<script src="{{ asset('storage') }}/assets/js/animated.headline.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('storage') }}/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('storage') }}/assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="{{ asset('storage') }}/assets/js/contact.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.form.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.validate.min.js"></script>
        <script src="{{ asset('storage') }}/assets/js/mail-script.js"></script>
        <script src="{{ asset('storage') }}/assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('storage') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('storage') }}/assets/js/main.js"></script>

    </body>
</html>
