<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Ad | Business Planing</title>
    <meta charset="utf-8">
    <meta name="description" content="Plus E-Commerce Template">
    <meta name="author" content="Diamant Gjota" />
    <meta name="keywords" content="plus, html5, css3, template, ecommerce, e-commerce, bootstrap, responsive, creative" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/css/swiper.css" />

    <!-- this is default skin you can replace that with: dark.css, yellow.css, red.css ect -->
    <link id="pagestyle" rel="stylesheet" type="text/css" href="/css/default.css" />

    <!-- Google fonts -->
    <link href="../../../fonts.googleapis.com/css14ba?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="../../../fonts.googleapis.com/cssecbd.css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="../../../fonts.googleapis.com/css51e6.css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">

    @yield('css')
    <style>
        .widget .items li .product-details {
            margin-left: 0;
            padding: 0;
        }
        .overlay-lock {
            position: fixed;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 2;
            cursor: pointer;
        }
    </style>
</head>
<body>




<!-- start topBar -->
<div class="topBar">
    <div class="container">
        <ul class="list-inline pull-left hidden-sm hidden-xs">
            <li><span class="text-primary">Have a question?</span> Call +123 4567 8910</li>
        </ul>

        <ul class="topBarNav pull-right">
            <li class="linkdown">
                <a href="javascript:void(0);">
                    <i class="fa fa-user mr-5"></i>
                    <span class="hidden-xs">
                                My Account
                                <i class="fa fa-angle-down ml-5"></i>
                            </span>
                </a>
                <ul class="w-150">
                    @guest()
                        <li><a href="{{ url('login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}" >Try Free Today</a></li>
                    @else
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest()


                </ul>
            </li>
        </ul>
    </div><!-- end container -->
</div>
<!-- end topBar -->

<div class="middleBar">
    <div class="container">
        <div class="row display-table">
            <div class="col-sm-3 vertical-align text-left hidden-xs">
                <a href="javascript:void(0);">
                    <img width="160" src="img/logo-big.png" alt="" />
                </a>
            </div><!-- end col -->
            <div class="col-sm-7 vertical-align text-center">
                <form>
                    <div class="row grid-space-1">
                        <div class="col-sm-6">
                            <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                        </div><!-- end col -->
                        <div class="col-sm-3">
                            <select class="form-control input-lg" name="category">
                                <option value="all">All Categories</option>
{{--                                @foreach($categories as $item)--}}
{{--                                    <option value="{{ $item->slug }}">{{ $item->name }} </option>--}}
{{--                                @endforeach--}}

                            </select>
                        </div><!-- end col -->
                        <div class="col-sm-3">
                            <input type="submit"  class="btn btn-default btn-block btn-lg" value="Search">
                        </div><!-- end col -->
                    </div><!-- end row -->
                </form>
            </div><!-- end col -->
        </div><!-- end  row -->
    </div><!-- end container -->
</div><!-- end middleBar -->

<!-- start navbar -->
<div class="navbar yamm navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="javascript:void(0);" class="navbar-brand visible-xs">
                <img src="/img/logo.png" alt="logo">
            </a>
        </div>
        <div id="navbar-collapse-3" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!-- Home -->
                <!-- elements -->
                <li class="{{ active('/') }}"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/b2b_sales') }}">Business Sales</a></li>
                <li><a href="{{ url('/b2b_invests') }}">Investors</a></li>
                <li><a href="{{ url('/open_partnership') }}">Open Partnerships</a></li>

            </ul><!-- end navbar-nav -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown right">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <span class="hidden-sm">Categories</span><i class="fa fa-bars ml-5"></i>
                    </a>
                    <ul class="dropdown-menu">
{{--                        @foreach($categories as $item)--}}
{{--                            <li><a class="" href="#">{{ $item->name }}</a></li>--}}
{{--                        @endforeach--}}
                    </ul><!-- end ul dropdown-menu -->
                </li><!-- end dropdown -->
            </ul><!-- end navbar-right -->
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</div><!-- end navbar -->





@yield('content')

<!-- start footer -->
<footer class="footer">




    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <h5 class="title">Plus</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>

                <hr class="spacer-10 no-border">

                <ul class="social-icons">
                    <li class="facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                    <li class="dribbble"><a href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
                    <li class="linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                    <li class="youtube"><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
                    <li class="behance"><a href="javascript:void(0);"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div><!-- end col -->
            <div class="col-sm-3">
                <h5 class="title">My Account</h5>
                <ul class="list alt-list">
                    <li><a href="my-account.html"><i class="fa fa-angle-right"></i>My Account</a></li>
                    <li><a href="wishlist.html"><i class="fa fa-angle-right"></i>Wishlist</a></li>
                    <li><a href="cart.html"><i class="fa fa-angle-right"></i>My Cart</a></li>
                    <li><a href="checkout.html"><i class="fa fa-angle-right"></i>Checkout</a></li>
                </ul>
            </div><!-- end col -->
            <div class="col-sm-3">
                <h5 class="title">Information</h5>
                <ul class="list alt-list">
                    <li><a href="about-us-v1.html"><i class="fa fa-angle-right"></i>About Us</a></li>
                    <li><a href="faq.html"><i class="fa fa-angle-right"></i>FAQ</a></li>
                    <li><a href="privacy-policy.html"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                    <li><a href="contact-v1.html"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                </ul>
            </div><!-- end col -->
            <div class="col-sm-3">
                <h5 class="title">Payment Methods</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <ul class="list list-inline">
                    <li class="text-white"><i class="fa fa-cc-visa fa-2x"></i></li>
                    <li class="text-white"><i class="fa fa-cc-paypal fa-2x"></i></li>
                    <li class="text-white"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                    <li class="text-white"><i class="fa fa-cc-discover fa-2x"></i></li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="spacer-30">

        <div class="row text-center">
            <div class="col-sm-12">
                <p class="text-sm">&COPY; {{ date('Y') }}. Made with <i class="fa fa-heart text-danger"></i> by <a href="javascript:void(0);">Oxyglobal.</a></p>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer>
<!-- end footer -->


<!-- JavaScript Files -->
<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/jquery.downCount.js"></script>
<script type="text/javascript" src="/js/nouislider.min.js"></script>
<script type="text/javascript" src="/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/js/pace.min.js"></script>
<script type="text/javascript" src="/js/star-rating.min.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="/js/gmaps.js"></script>
<script type="text/javascript" src="/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

@yield('js')
@yield('script')

</body>


</html>
