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
                <li><a href="">Home</a>

                </li>
                <li><a href="">Features</a>

                </li>
                <li><a href="">Prices</a>

                </li>
                <li><a href="">Blog</a>

                </li>
                <li><a href="">Affiliates</a>

                </li>
                @guest()
                    <li><a href="{{ url('login') }}">Sign in</a></li>
                    <li><a href="{{ url('login') }}" class="btn dark-btn large-btn" id="butn">Try Free Today</a></li>
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
<div id="top" class="slider">

    <div class="full-slider intro" id="backend">
        <!-- Start slide-->
        <div data-image="img/bgn22.jpg" class="slide bg-mask background-image full-vh">
            <div class="container-slide vertical-align center head-desc">
                <div class="container">
                    <div class="row" id="designs">
                        <div class="col-md-12">
                            <div class="heading-title-big">Best <span>For Business Ads</span></div>

                            <div id="types">
                                <div id="typewriters">  </div><div id="cursor"></div></div>
                            <!--<div class="animated fadeInRight">Repricing - allowing you to stay ahead of the competition.</div>-->
                            <!--<div class="buttons-section"><a href="login.html" class="btn dark-btn large-btn">Login</a></div>-->
                            <div class="buttons-section"><a href="/register" class="btn dark-btn large-btn">Create Account</a></div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js" class="canvas-background"></div>
        </div>
    </div>
    <!--Contol slider-->
    <div id="dots-control-full-slider" class="dots-control-carousel"></div>
    <!-- Strat Control carousel-->
    <div id="control-full-slider" class="prev-next-block-rotate opacity-control">
        <div class="wrap-prev">
            <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
        </div>
        <div class="wrap-next">
            <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
        </div>
    </div><a href="#into" class="smooth-scroll btn-down"><i aria-hidden="true" class="fa fa-angle-down"></i></a>
</div>
<!-- End slider section-->
<!--Start into slider-->
<div id="into" data-image="img/bgn1.jpg" class="into-slider background-image">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <img style="width: 75px;" src="assets/images/items/invent.png">
                    <h4>Register deals </h4>
                    <p>Manage deals with your team</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/listin.png">
                    <h4>Search deals</h4>
                    <p>Submit Information Disclosure Requests Paid Function</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/order.png">
                    <h4>Upon Closing the Deal</h4>
                    <p>For Sellers : Complimentary reward will be paid by Us</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item"><img style="width: 75px;" src="assets/images/items/ninja.png">
                    <h4>Upon Closing the Deal</h4>
                    <p>For Buyers : Commission will be charged</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End into slider-->
<!-- Section about-->
<section id="about" class="about-us">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2>How it <span>Works</span></h2>
                    <div class="small-desd">Steps to  <span>a successful Business</span></div>
                    <p>This is the steps to create a perfect Business Plan </p>
                </div>

            </div>
            <div class="row">
                <!-- Item-->
                <div class="col-md-12">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>For Sellers</h4>
                        <div class="body">
                            <h4>What You Can Do</h4>
                            <ul class="list">
                                <li>Register deals</li>
                                <li>Manage deals with your team</li>
                                <li>Upload /Download related documents</li>
                                <li>Disclose deal information</li>
                                <li>Online negotiations via chat</li>
                                <li>Professional support</li>
                            </ul>
                            <h4>Upon Closing the Deal</h4>
                            <ul class="list">
                                <li>
                                    <em>Complimentary reward will be paid by Us</em>
                                </li>
                            </ul>
                            <h4>Usage Fee</h4>
                            <ul class="list">
                                <li>
                                    <em>All free of charge</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col-md-6 col-sm-6 col-xs-12 item-icon">
                        <h4>For Buyers</h4>
                        <div class="body">
                            <h4>What You Can Do</h4>
                            <ul class="list"><li>Search deals</li><li>Submit Information Disclosure Requests <span>Paid Function</span></li><li>Manage deals with your team</li><li>Upload / Download related documents</li><li>Online negotiations via chat</li><li>Professional support</li></ul>
                            <h4>Upon Closing the Deal</h4>
                            <ul class="list">
                                <li>Commission will be charged</li>
                            </ul>
                            <h4>Usage Fee</h4>
                            <ul class="list">
                                <li>
                                    <em>All paid functions are free of charge until the end of June 2019!</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Edn items-->
            </div>
        </div>

    </div>

</section>

{{--<div class="tabGroup example">--}}
    {{--<ul class="swichtab-controller">--}}
        {{--<li data-swichtab="controller"><a href="#tab1">tab1</a></li>--}}
        {{--<li data-swichtab="controller"><a href="#tab2">tab2</a></li>--}}
        {{--<li data-swichtab="controller"><a href="#tab3">tab3</a></li>--}}
    {{--</ul>--}}
    {{--<div class="swichtab-contents">--}}
        {{--<div id="tab1" class="swichtab-panel" data-swichtab="target">--}}
            {{--<p>Tab 1</p>--}}
        {{--</div>--}}

        {{--<div id="tab2" class="swichtab-panel" data-swichtab="target">--}}
            {{--<p>Tab 2</p>--}}
        {{--</div>--}}

        {{--<div id="tab3" class="swichtab-panel" data-swichtab="target">--}}
            {{--<p>Tab 3</p>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.swichtab-contents -->--}}
{{--</div>--}}

<section id="services" class="section-our-services bg-white-section">
    <div class="container tabGroup b2b" >
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-title center">
                    <h2 class="animated fadeInDown" style="opacity: 1;">Our <span>Top Ads</span></h2>
                </div>
                <div class="controls-portfolio center">
                    <ul class="swichtab-controller">
                        <li data-swichtab="controller"><a href="#tab1">B2B Invests</a></li>
                        <li data-swichtab="controller"><a href="#tab2">B2B Sale</a></li>
                        <li data-swichtab="controller"><a href="#tab3">Open Partnership</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="">

                <div class="row swichtab-contents">
                    <div  id="tab1" class="swichtab-pane" data-swichtab="target">
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>

                    </div>

                    <div  id="tab2" class="swichtab-pane" data-swichtab="target">
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>


                    </div>

                    <div  id="tab3" class="swichtab-pane" data-swichtab="target">
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>
                        <div class="item-service">
                            <div data-image="img/bg4.jpg" class="col-md-3 icon-service bg-mask background-image" style="background-image: url(&quot;img/bg4.jpg&quot;); height: 245px;">
                                <div class="small-i"><i class="pe-7s-phone"></i></div>
                                <div class="large-i"><i class="pe-7s-phone"></i></div>
                            </div>
                            <div class="col-md-9 content-service">
                                <h2>Project <span>Name</span></h2>
                                <p>Ads Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <hr>
                                <div class="buttons-section left"><a href="" class="btn white-btn">View Ad</a></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section data-image="img/bg1.jpg" class="section-work-progress background-image bg-dark-section" style="background-image: url(&quot;img/bg1.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="heading-title small-heading text-left">
                    <h2 class="animated fadeInDown" style="opacity: 1;">Our  <span>Business Ads</span></h2>
                    <p class="animated fadeInUp" style="opacity: 1;">create posts according to 3 categories such as b2b,b2b invest,open partnership</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="icon-progress"><i class="pe-7s-cash"></i>
                    <p>1. B2B Sales</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="icon-progress"><i class="pe-7s-plug"></i>
                    <p>2. B2B Invest</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="icon-progress"><i class="pe-7s-users"></i>
                    <p>3. Open Partnership</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-image="" class="section-how-we-work bg-white-section background-image">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="heading-titl center">
                    <h2>FAQs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
                    <!--tab-->
                    <h3 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-header-active ui-state-active ui-accordion-icons" role="tab" id="ui-id-13" aria-controls="ui-id-14" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><i class="fa fa-question"></i>Will I be charged to use The Services</h3>
                    <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-14" aria-labelledby="ui-id-13" role="tabpanel" aria-hidden="false" style="display: block;">
                        <p>All services are free of charge up to closing for both sides.
                            <br>* Buyers will be charged upon closing.
                            <br>Please contact us for details after user registration.

                            <br>*Information disclosure request function will be free of charge only until the end of June 2019</p>
                    </div>
                    <!--tab-->
                    <h3 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-15" aria-controls="ui-id-16" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><i class="fa fa-question"></i>Who are users of These Service</h3>
                    <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-16" aria-labelledby="ui-id-15" role="tabpanel" aria-hidden="true" style="display: none;">
                        <p>
                            Our users include corporates, financial advisors, banks, private equity firms, law firms and accounting firms from over 130 countries..</p>
                    </div>
                    <!--tab-->
                    <h3 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-17" aria-controls="ui-id-18" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><i class="fa fa-question"></i>How will information of registered deals be open to All users?</h3>
                    <div class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-18" aria-labelledby="ui-id-17" role="tabpanel" aria-hidden="true" style="display: none;">
                        <p>
                            Basic information on no name basis is disclosed to Allusers only after review by Our team.
                            <br>Detailed information on businesses and financials that possibly could lead to identity of the target can only be disclosed after sellers approve information disclosure requests from buyers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







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