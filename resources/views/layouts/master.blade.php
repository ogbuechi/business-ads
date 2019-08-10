<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Business Ad | Business Planing</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/nivo-lightbox.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    <style type="text/css">
        .inner-box .help-block {
            line-height: 1.4;
            color: red;
        }
        .form-group .has-error input {
            border-color: red;
        }
        .form-group .has-error select {
            border-color: red;
        }
        .search-box .btn-search {
            position: absolute;
            top: 3px;
            right: 3px;
            background-color: transparent !important;
            border: none !important;
            font-size: 16px;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline: none !important;
            color: #98a6ad;
        }
        .package .line{
            text-decoration-line: line-through
        }
        .search-bar .form-group {
            margin: 5px;
            float: left;
            width: 100%;
        }
        .featured-box figure .icon i {
            border-radius: 0;
        }

        .search-bar .search-inner {
            margin: auto;
            border: 0;
            padding: 10px;
            width: 51%;
            float: none;
            position: relative;
            background: rgba(128,128,128,.5);
        }
        @media (max-width: 767px){
            .search-bar .search-inner {
                width: 100%;
            }
        }
        .featured-box .feature-content ul.address li {
             width: 100%;

        }
    </style>
</head>
<body>

<header id="header-wrap">

    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                    <span class="lni-menu"></span>
                </button>
                <a href="{{ route('home') }}" class="navbar-brand">Gloseed </a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('business.investors') }}">
                            Business Investors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('business.sales') }}">
                            Business Sales
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('business.partnerships') }}">
                            Open Partnership
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact
                        </a>
                    </li>
                </ul>
                <ul class="sign-in">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
                        <div class="dropdown-menu">
                           @guest()
                            <a class="dropdown-item" href="{{ url('/login') }}"><i class="lni-lock"></i> Log In</a>
                            <a class="dropdown-item" href="{{ url('/register') }}"><i class="lni-user"></i> Signup</a>
                            @else
                                <a class="dropdown-item" href="{{ route('admin.home') }}"><i class="lni-lock"></i> Dashboard</a>
                    <a class="dropdown-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                            @endguest
                        </div>
                    </li>
                </ul>
                <a class="tg-btn" href="{{ route('admin.home') }}">
                    <i class="lni-pencil-alt"></i> Post An Ad
                </a>
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('business.investors') }}">
                    Business Investors
                </a>
            </li>
            <li>
                <a href="{{ route('business.sales') }}">
                    Business Sales
                </a>
            </li>
            <li>
                <a href="{{ route('business.partnerships') }}">
                    Open Partnership
                </a>
            </li>
            <li>
                <a>My Account</a>
                <ul class="dropdown">
                    @guest()
                        <li><a href="{{ url('/login') }}"><i class="lni-lock"></i> Log In</a></li>
                        <li><a href="{{ url('/register') }}"><i class="lni-user"></i> Signup</a></li>
                    @else
                        <li><a href="{{ route('admin.home') }}"><i class="lni-lock"></i> Dashboard</a></li>
                        <li><a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a></li>
                    @endguest
                </ul>
            </li>
        </ul>

    </nav>

    @if (is_active('home'))
        @include('partials.hero_area')
    @endif

</header>


@yield('content')

{{--<div id="content" class="section-padding">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">--}}
{{--                <aside class="stick-me">--}}
{{--                    <div class="sidebar-box">--}}
{{--                        <div class="user">--}}
{{--                            <figure>--}}
{{--                                <a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>--}}
{{--                            </figure>--}}
{{--                            <div class="usercontent">--}}
{{--                                <h3>{{ Auth::user()->name }}</h3>--}}
{{--                                <h4>Publisher</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <nav class="navdashboard">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="{{ active('dashboard') }}" href="{{ url('dashboard') }}">--}}
{{--                                        <i class="lni-dashboard"></i>--}}
{{--                                        <span>Dashboard</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="account-profile-setting.html">--}}
{{--                                        <i class="lni-cog"></i>--}}
{{--                                        <span>Profile Settings</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{ route('coming') }}">--}}
{{--                                        <i class="lni-wallet"></i>--}}
{{--                                        <span>My Sales Ads</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="{{ active('invests.invest.*') }}" href="{{ route('invests.invest.myads') }}">--}}
{{--                                        <i class="lni-pulse"></i>--}}
{{--                                        <span>My Invests Ads</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="{{ route('coming') }}">--}}
{{--                                        <i class="lni-users"></i>--}}
{{--                                        <span>My Open Partnership Ads</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li>--}}
{{--                                    <a href="offermessages.html">--}}
{{--                                        <i class="lni-envelope"></i>--}}
{{--                                        <span>Offers/Messages</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="payments.html">--}}
{{--                                        <i class="lni-wallet"></i>--}}
{{--                                        <span>Payments</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="account-favourite-ads.html">--}}
{{--                                        <i class="lni-heart"></i>--}}
{{--                                        <span>My Favourites</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="privacy-setting.html">--}}
{{--                                        <i class="lni-star"></i>--}}
{{--                                        <span>Privacy Settings</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="lni-enter"></i>--}}
{{--                                        <span>Logout</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                    <div class="widget">--}}
{{--                        <h4 class="widget-title">Advertisement</h4>--}}
{{--                        <div class="add-box">--}}
{{--                            <img class="img-fluid" src="assets/img/img1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </aside>--}}
{{--            </div>--}}



{{--            @yield('content')--}}



{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<footer>

    {{--<section class="footer-Content">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">--}}
                    {{--<div class="widget">--}}
                        {{--<h3 class="footer-logo"><img src="assets/img/logo.png" alt=""></h3>--}}
                        {{--<div class="textwidget">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">--}}
                    {{--<div class="widget">--}}
                        {{--<h3 class="block-title">Latest Ads</h3>--}}
                        {{--<ul class="media-content-list">--}}
                            {{--<li>--}}
                                {{--<div class="media-left">--}}
                                    {{--<img class="img-fluid" src="/assets/img/art/img1.jpg" alt="">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<span class="price">$ 79</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="post-title"><a href="ads-details.html">Brand New Macbook Pro</a></h4>--}}
                                    {{--<span class="date">12 Jan 2018</span>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="media-left">--}}
                                    {{--<img class="img-fluid" src="assets/img/art/img2.jpg" alt="">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<span class="price">$ 49</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="post-title"><a href="ads-details.html">Canon Photography Camera</a></h4>--}}
                                    {{--<span class="date">28 Mar 2018</span>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">--}}
                    {{--<div class="widget">--}}
                        {{--<h3 class="block-title">Help & Support</h3>--}}
                        {{--<ul class="menu">--}}
                            {{--<li><a href="#">Live Chat</a></li>--}}
                            {{--<li><a href="#">Privacy Policy</a></li>--}}
                            {{--<li><a href="#">Purchase Protection</a></li>--}}
                            {{--<li><a href="#">Support</a></li>--}}
                            {{--<li><a href="#">Contact us</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">--}}
                    {{--<div class="widget">--}}
                        {{--<h3 class="block-title">Subscribe us</h3>--}}
                        {{--<p class="text-sub">We have over 5 years of experience Our suppoer avalable to help you 24 hours a day, seven days week</p>--}}
                        {{--<form method="post" id="subscribe-form" name="subscribe-form" class="validate">--}}
                            {{--<div class="form-group is-empty">--}}
                                {{--<input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">--}}
                                {{--<button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>--}}
                                {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                        {{--<ul class="footer-social">--}}
                            {{--<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>--}}
                            {{--<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>--}}
                            {{--<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>--}}
                            {{--<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}


    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info float-left">
                        <p>All copyrights reserved &copy; {{ date('Y') }} - Powered by <a href="https://uideck.com/" rel="nofollow">Oxyglobal</a></p>
                    </div>
                    {{--<div class="float-right">--}}
                        {{--<ul class="bottom-card">--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="assets/img/footer/card1.jpg" alt="card"></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="assets/img/footer/card2.jpg" alt="card"></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="assets/img/footer/card3.jpg" alt="card"></a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="assets/img/footer/card4.jpg" alt="card"></a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

{{--<div id="preloader">--}}
{{--    <div class="loader" id="loader-1"></div>--}}
{{--</div>--}}


<script src="/assets/js/jquery-min.js"></script>
<script src="/js/app.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/nivo-lightbox.js"></script>
<script src="/assets/js/jquery.slicknav.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/form-validator.min.js"></script>
<script src="/assets/js/contact-form-script.min.js"></script>
<script src="/assets/js/summernote.js"></script>

<script src="{{ asset('/js/sticky-kit.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".stick-me").stick_in_parent();
    });
</script>
</body>

</html>
