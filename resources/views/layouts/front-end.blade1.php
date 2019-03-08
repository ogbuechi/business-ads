<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Business Ad | Business Planing</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('img/favicon/favicon.ico') }}">
    <!--Libs css-->
    <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
    <!--Main css-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <link rel="stylesheet" href="{{ asset('css/range.css') }}">
    <link rel="stylesheet" type="text/css" href="animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swichTab.css') }}">


</head>
<body class="dark-load">
<header id="top-nav" class="top-nav page-header">
    <div class="container"><a href="#" class="logo smooth-scroll"><img src="{{ asset('img/mark.png') }}" alt="logo" class="logo-white"><img src="{{ asset('img/mark.png') }}" alt="logo" class="logo-dark"></a>
        <nav class="top-menu">
            <ul class="sf-menu">
                <!--Menu default-->
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/b2b_sales') }}">B2B Sales</a></li>
                <li><a href="{{ url('/b2b_invests') }}">B2B Invests</a></li>
                <li><a href="{{ url('/open_partnership') }}">OPEN PARTNERSHIP</a></li>
                <li><a href="{{ url('/blog') }}">News</a></li>
                <li><a href=""></a></li>
                @guest()
                    <li><a href="{{ url('login') }}">Sign in</a></li>
                    <li><a href="{{ url('login') }}" class="btn dark-btn large-btn" id="butn">Try Free Today</a></li>
                    @else
                    <li><a href="{{ url('dashboard') }}" class="btn dark-btn large-btn" id="butn">Dashboard</a></li>
                @endguest()




            </ul>

            <!--&lt;!&ndash; Start toggle menu&ndash;&gt;<a href="#" class="toggle-mnu"><span></span></a>-->
            <!--&lt;!&ndash; Start toggle menu&ndash;&gt;<a href="#" class="toggle-top"><span></span><span></span><span></span><span></span><span></span></a>-->
        </nav>
        <!-- Start mobile menu-->
        <div id="mobile-menu">
            <div class="inner-wrap">
                <nav>
                    <ul class="nav_menu">
                        <li class="menu-item-has-children current-menu-item"><a href="#">Home</a>

                        </li>

                        <li><a href="#about" class="smooth-scroll">About</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- End mobile menu-->
    </div>
</header>

@yield('content')


<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<![endif]-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--<div class="logo"><img src="img/mark.png" alt="logo" class="logo-white"></div>-->
                <p>We are a creative agency with a passion for design & developing beautiful creations.</p>
                <!--Start social links-->
                <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <!--End social links-->
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>ADDITIONAL LINKS</h5>
                    <ul class="list">
                        <li><a href="">For Freelancer</a></li>
                        <li><a href="">For Photographs</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">404 page</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>Pages</h5>
                    <ul class="list">
                        <li><a href="">About page</a></li>
                        <li><a href="">Blog page</a></li>
                        <li><a href="">Price page</a></li>
                        <li><a href="">Portfolio page</a></li>
                        <li><a href="">Portfolio single</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="links">
                    <h5>Info</h5>
                </div>
                <div class="linked">

                    <ul class="list">
                        <li>Phone:  +44 7421 112063</li>
                        <li>Email:support@sellingsumo.com</li>

                        <li>Skype: live:sellingsumo_1</li></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="down-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© 2019 Copyright SellingSumo - All Rights Reserved.</p>
                    <ul class="footer-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <!--<li><a href="about.html" class="smooth-scroll">About</a></li>-->
                        <!--<li><a href="services" class="smooth-scroll">Services</a></li>-->
                        <!--<li><a href="#portfolio" class="smooth-scroll">Our works</a></li>-->
                        <!--<li><a href="#skills" class="smooth-scroll">Skills</a></li>-->
                        <!--<li> <a href="contact" class="smooth-scroll">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--button to top-->
<div class="top icon-down toTopFromBottom"><a href="#top" class="smooth-scroll"><i class="pe-7s-angle-up"></i></a></div>
<!--end button to top-->
<!--Google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0&amp;sensor=false"></script>
<!--Libs-->
<script src="{{ asset('js/libs.js') }}"></script>
<!--Use scripts-->
<script src="{{ asset('js/common.js') }}"></script>
<!--Use scripts-->
<script src="{{ asset('js/customs.js') }}"></script>

<!--Use scripts-->
<script src="{{ asset('js/wow.js') }}"></script>

<script src="{{ asset('js/range.js') }}"></script>

<script src="{{ asset('js/jquery.swichTab.js') }}"></script>
<script>

    $('.b2b').swichTab({
        swiper: true,
        cahngePanel: 'toggle'
    });
</script>
</body>
</html>