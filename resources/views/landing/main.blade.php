<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="es">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corporate Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Rappo HTML Template v1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="./landing-page/plugins/bootstrap/bootstrap.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="./landing-page/plugins/animate-css/animate.css">
    <!-- Icon Font css -->
    <link rel="stylesheet" href="./landing-page/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="./landing-page/plugins/fonts/Pe-icon-7-stroke.css">
    <!-- Themify icon Css -->
    <link rel="stylesheet" href="./landing-page/plugins/themify/css/themify-icons.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="./landing-page/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./landing-page/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="./landing-page/css/style.css">

    <!--Favicon-->
    <link rel="icon" href="./landing-page/images/favicon.png" type="image/x-icon">

</head>

<body id="top-header">
    <!-- NAVBAR
    ================================================= -->
    @include('landing.components.navbar')
    <!-- HERO
    ================================================== -->
    
    @yield('content')

    <!-- FOOTER
    ================================================== -->
    @include('landing.components.footer')

    <!--  Page Scroll to Top  -->

    <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--
  Essential Scripts
  =====================================-->
    <!-- jQuery -->
    <script src="./landing-page/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./landing-page/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="./landing-page/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="./landing-page/plugins/google-map/gmap.js"></script>

    <script src="./landing-page/js/script.js"></script>

</body>

</html>
