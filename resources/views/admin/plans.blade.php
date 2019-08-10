@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Gloseed Plans </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Gloseed</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Gloseed Account Plans
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xl-9 center-page">
                    <div class="text-center">
                        <h3 class="m-b-30 m-t-20">Upgrade Your Account</h3>
                        @if (Auth::user()->plan->level == 0)
                            Upgrading your account to premium will unlock many Gloseed features,<br> see plan below for list of features
                        @endif
                    </div>

                    <div class="row m-t-50">

                        <div class="pricing-column col-lg-6">
                            <div class="ribbon"><span>ACTIVE</span></div>
                            <div class="inner-box card-box">
                                <div class="plan-header text-center">
                                    <h3 class="plan-title">Free Plan</h3>
                                    <h2 class="plan-price">₦0.00</h2>
                                    <div class="plan-duration">Per Month</div>
                                </div>
                                <ul class="plan-stats list-unstyled text-center">
                                    <li><strong>View</strong> Listed Ads</li>
                                    <li class="line"><strong>Business</strong> Ad posting</li>
                                    <li class="line"><strong>View</strong> Poster Details</li>
                                    <li class="line"><strong>View </strong> Ads Details</li>
                                    <li class="line"><strong>View </strong> Company Details</li>
                                    <li class="line"><strong>Live Chat</strong> with Ad poster!</li>
                                    <li class="line"><strong>Live Chat</strong> Email Support</li>
                                    <li class="line"><strong>Live Chat</strong> 24x7 Support</li>
                                </ul>

                                <div class="text-center">
                                    @if (Auth::user()->plan->level == 0)
                                        <a href="#" class="btn btn-primary btn-bordred btn-rounded waves-effect waves-light">Active Plan</a>
                                    @else
                                        <a href="#" class="btn btn-success btn-bordred btn-rounded waves-effect waves-light">Select Plan</a>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <!--Pricing Column-->
                        <div class="pricing-column col-lg-6">
                            <div class="inner-box card-box">
                                <div class="plan-header text-center">
                                    <h3 class="plan-title">Premium Plan</h3>
                                    <h2 class="plan-price">₦20,000</h2>
                                    <div class="plan-duration">Per Month</div>
                                </div>
                                <ul class="plan-stats list-unstyled text-center">
                                    <li><strong>View</strong> Listed Ads</li>
                                    <li><strong>Business</strong> Ad posting</li>
                                    <li><strong>View</strong> Poster Details</li>
                                    <li><strong>View </strong> Ads Details</li>
                                    <li><strong>View </strong> Company Details</li>
                                    <li><strong>Live Chat</strong> with Ad poster!</li>
                                    <li>Email Support</li>
                                    <li>24x7 Support</li>
                                </ul>

                                <div class="text-center">
                                    @if (Auth::user()->plan->level == 0)
                                    <a href="#" class="btn btn-success btn-bordred btn-rounded waves-effect waves-light">Activate Plan</a>
                                        @else
                                        <a href="#" class="btn btn-primary btn-bordred btn-rounded waves-effect waves-light">Active Plan</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->

    </div>

@endsection

