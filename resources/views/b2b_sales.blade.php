@extends('layouts.front-end')
<!-- Start full screen top nav-->
@section('content')
    <div data-image="img/bg1.jpg" class="fullscreen-topnav rotate background-image">
        <!-- Start container-->
        <div class="container-fluid height-half">
            <div class="row height-full no-padding-bottom">
                <div class="items height-full"><a href="faq.html" class="col-lg-3 col-md-6 col-sm-6 col-xs-12 height-full link">
                        <div class="item table">
                            <div class="content-nav table-cell">
                                <p>FAQ - page</p>
                                <h2>Need help ?</h2>
                            </div>
                        </div></a><a href="services.html" class="col-lg-3 col-md-6 col-sm-6 col-xs-12 col-lg-push-6 height-full link ">
                        <div class="item table">
                            <div class="content-nav table-cell">
                                <p>All services</p>
                                <h2>Our services</h2>
                            </div>
                        </div></a>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-lg-pull-3 height-full text-item">
                        <div class="item table">
                            <div class="content-nav table-cell">
                                <h3>Fact about us:</h3>
                                <p>In 2018 we are Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start container-->
        <div class="container-fluid height-half-60">
            <div class="row no-padding-bottom height-full">
                <div class="items height-full">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-play height-full">
                        <div class="video-section table">
                            <div class="table-cell"><a href="https://www.youtube.com/watch?v=lm4OJxGQm_E" class="icon-play anim-shadow"><i class="pe-7s-play"></i></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-full-screen height-full">
                        <div class="content table">
                            <div class="table-cell">
                                <h3>Start project:</h3>
                                <form class="contact-form-sub">
                                    <input type="text" name="Name" placeholder="Your Name">
                                    <input type="text" name="Email" placeholder="Email *">
                                    <select name="Servises" id="selectize" class="demo-default">
                                        <option value="">Choose service:</option>
                                        <option value="Services">Services 1</option>
                                        <option value="Services 2">Services 2</option>
                                        <option value="Services 3">Services 3</option>
                                    </select>
                                    <textarea name="Message" placeholder="Message *" cols="3" rows="5"></textarea>
                                    <p class="success-msg hidden notify">Your order has been send</p>
                                    <p class="success-msg hidden notify">Error sending order</p>
                                    <input type="submit" value="Send message" class="btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container-->
    </div>
    <!-- End full screen top nav-->
    <!-- Start Content section-->
    {{--<section data-image="img/bgn12.jpg" id="top" class="display-page img-parallax bg-mask background-image">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="content">--}}
    {{--<!-- heading title-->--}}
    {{--<h1>b2b Sales</h1>--}}
    {{--<!-- horizontal line--><span class="horizontal-line"></span><span></span>--}}
    {{--<!-- description slider-->--}}
    {{--<div class="description">--}}
    {{--<p>Here are availabel b2b Sales</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!--Section our services-->
    <section id="services" class="section-our-services bg-white-section">
        <div class="container">
            <br>
            <br>
            <br>
            <div  id="tab1" class="row">
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

        </div>
    </section>
    <!--Section work progress-->


@stop

