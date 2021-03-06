<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Flipmart premium HTML5 & CSS3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/blue.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/owl.transitions.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/rateit.css">
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/bootstrap-select.min.css">
    <link href="{{asset('assets/website/assets/')}}/css/lightbox.css" rel="stylesheet">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{asset('assets/website/assets/')}}/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frontend_two.inc.header')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->

                @include('frontend_two.inc.home_side_drawer')
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
               @yield('content')
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand1.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand2.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand3.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand4.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand5.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand6.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand2.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand4.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand1.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->

                        <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('assets/website/assets/')}}/images/brands/brand5.png" src="{{asset('assets/website/assets/')}}/images/blank.gif" alt=""> </a> </div>
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frontend_two.inc.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/website/assets/')}}/js/jquery-1.11.1.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/echo.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/jquery.easing-1.3.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/bootstrap-slider.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/website/assets/')}}/js/lightbox.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/bootstrap-select.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/wow.min.js"></script>
    <script src="{{asset('assets/website/assets/')}}/js/scripts.js"></script>
</body>

</html>