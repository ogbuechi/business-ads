@extends('layouts.master')

@section('content')

    <section class="featured section-padding">
        <div class="container">
            <h1 class="section-title">Trending Business Ads in Nigeria</h1>
            <div class="row">
                @foreach($ads as $item)
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <i class="lni-heart"></i>
                            </div>
                            <a href="{{ $item->link }}"><img class="img-fluid" src="{{ $item['image'] }}" alt=""></a>
                        </figure>
                        <div class="feature-content">
                            <div class="product">
                                <a href="#"><i class="lni-folder"></i> {{ $item['type'] }}</a>
                            </div>
                            <h4><a target="_blank" href="{{ $item->link }}">

                                        {{ $item['name'] }}

                                </a></h4>
                            <span>Posted: {{ $item->created_at->diffForHumans() }}</span>
                            <p>{{ $item['short_desc'] }}</p>
                            <div class="listing-bottom">
                                <h3 class="price float-left h6">{{ $item['amount'] }}</h3>
                                <a href="#" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    @include('partials.featured_ads', ['data' => $ads])

    <div class="faq section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-faq text-center">
                        <h2 class="section-title">How It Works</h2>
                        <div class="small-desd">Steps to  <span>a successful Business</span></div>
                        <p>This is the steps to create a perfect Business Plan </p>
                    </div>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        For Sellers
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="">
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
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        For Buyers
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
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
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="counter-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 work-counter-widget text-center">
                    <div class="counter">
                        <div class="icon"><i class="lni-layers"></i></div>
                        <h2 class="counterUp">12090</h2>
                        <p>Regular Ads</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget text-center">
                    <div class="counter">
                        <div class="icon"><i class="lni-map"></i></div>
                        <h2 class="counterUp">350</h2>
                        <p>Locations</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget text-center">
                    <div class="counter">
                        <div class="icon"><i class="lni-user"></i></div>
                        <h2 class="counterUp">23453</h2>
                        <p>Reguler Members</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget text-center">
                    <div class="counter">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <h2 class="counterUp">250</h2>
                        <p>Premium Ads</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pricing-table" class="section-padding">
        <div class="container">
            <div class="row p-10">
                <div class="col-md-12">
                    <div class="mainHeading">
                        <h2 class="section-title">Package</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-user"></i>
                        </div>
                        <div class="title">
                            <h3>Free Account</h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">No Charges</p>
                        </div>
                        <ul class="description package">
                            <li><strong>View</strong> Listed Ads</li>
                            <li class="line"><strong>Business</strong> Ad posting</li>
                            <li class="line"><strong>View</strong> Poster Details</li>
                            <li class="line"><strong>View </strong> Ads Details</li>
                            <li class="line"><strong>View </strong> Company Details</li>
                            <li class="line"><strong>Live Chat</strong> with Ad poster!</li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="table" id="active-tb">
                        <div class="icon">
                            <i class="lni-user"></i>
                        </div>
                        <div class="title">
                            <h3>Premium User</h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">₦20,000</p>
                        </div>
                        <ul class="description package">
                            <li><strong>View</strong> Listed Ads</li>
                            <li><strong>Business</strong> Ad posting</li>
                            <li><strong>View</strong> Poster Details</li>
                            <li><strong>View </strong> Ads Details</li>
                            <li><strong>View </strong> Company Details</li>
                            <li><strong>Live Chat</strong> with Ad poster!</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>


{{--    <section class="testimonial section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                    <div id="testimonials" class="owl-carousel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="img-thumb">--}}
{{--                                    <img src="assets/img/testimonial/img1.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h2><a href="#">John Doe</a></h2>--}}
{{--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>--}}
{{--                                    <h3>Developer at of <a href="#">xyz company</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="img-thumb">--}}
{{--                                    <img src="assets/img/testimonial/img2.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h2><a href="#">Jessica</a></h2>--}}
{{--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>--}}
{{--                                    <h3>Developer at of <a href="#">xyz company</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="img-thumb">--}}
{{--                                    <img src="assets/img/testimonial/img3.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h2><a href="#">Johnny Zeigler</a></h2>--}}
{{--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>--}}
{{--                                    <h3>Developer at of <a href="#">xyz company</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="img-thumb">--}}
{{--                                    <img src="assets/img/testimonial/img1.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h2><a href="#">John Doe</a></h2>--}}
{{--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>--}}
{{--                                    <h3>Developer at of <a href="#">xyz company</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <div class="img-thumb">--}}
{{--                                    <img src="assets/img/testimonial/img2.png" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h2><a href="#">Jessica</a></h2>--}}
{{--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>--}}
{{--                                    <h3>Developer at of <a href="#">xyz company</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="subscribes section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row wrapper-sub">--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                    <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                    <form>--}}
{{--                        <div class="subscribe">--}}
{{--                            <input class="form-control" name="EMAIL" placeholder="Your email here" required="" type="email">--}}
{{--                            <button class="btn btn-common" type="submit">Subscribe</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="cta section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-md-6 col-lg-4">--}}
{{--                    <div class="single-cta">--}}
{{--                        <div class="cta-icon">--}}
{{--                            <i class="lni-grid"></i>--}}
{{--                        </div>--}}
{{--                        <h4>Refreshing Design</h4>--}}
{{--                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-md-6 col-lg-4">--}}
{{--                    <div class="single-cta">--}}
{{--                        <div class="cta-icon">--}}
{{--                            <i class="lni-brush"></i>--}}
{{--                        </div>--}}
{{--                        <h4>Easy to Customize</h4>--}}
{{--                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-md-6 col-lg-4">--}}
{{--                    <div class="single-cta">--}}
{{--                        <div class="cta-icon">--}}
{{--                            <i class="lni-headphone-alt"></i>--}}
{{--                        </div>--}}
{{--                        <h4>24/7 Support</h4>--}}
{{--                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@stop





