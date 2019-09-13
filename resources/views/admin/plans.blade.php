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
                                <form onsubmit="makePayment()" id="payment-form">
                                    <input type="hidden" value="{{ $user->profile->first_name }}" id="js-firstName" name="firstName" class="field-divided" >
                                    <input type="hidden" id="js-lastName" value="{{ $user->profile->last_name }}" name="lastName" class="field-divided"/>
                                    <input type="hidden" id="js-email" value="{{ $user->email }}" name="email"/>
                                    <input type="hidden" id="js-narration" value="Upgrade Account" name="narration"/>
                                    <input type="hidden" value="{{ $premium }}" id="js-amount" name="amount"/>
                                <div class="inner-box card-box">
                                    <div class="plan-header text-center">
                                        <h3 class="plan-title">Premium Plan</h3>
                                        <h2 class="plan-price">₦{{ $amount }}</h2>
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
{{--                                            <button class="btn btn-success btn-bordered btn-rounded waves-effect waves-light" type="button" onclick="makePayment()">Activate Plan</button>--}}

                                            <a href="{{ route('admin.account.payment') }}" class="btn btn-success btn-bordred btn-rounded waves-effect waves-light">Activate Plan</a>
                                        @else
                                            <a href="#" class="btn btn-primary btn-bordred btn-rounded waves-effect waves-light">Active Plan</a>
                                        @endif
                                    </div>
                                </div>
                                </form>
                            </div>




                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->

    </div>

@endsection

@section('js')
    <script>
        function makePayment() {
            var form = document.querySelector("#payment-form");
            var paymentEngine = RmPaymentEngine.init({
                key: 'SlVERU98NDIzNzMwNDZ8N2QyOWNmZmZlNTdmMTA5MTYwYjFkYzAyYTM4ZDljYzljNzZkYWFmMjdhY2UyMDhjOGE2NTgwZDkyNDMzOGZjNzJlMTZkZGE3M2NhYjZjYWE2NDIzMGE2YzMzNWE4OTM4YWFlZGIxYmQ3NmEyNjk5NDVjM2Q4ODkyMTExODlhNWY=',
                customerId: form.querySelector('input[name="email"]').value,
                firstName: form.querySelector('input[name="firstName"]').value,
                lastName: form.querySelector('input[name="lastName"]').value,
                email: form.querySelector('input[name="email"]').value,
                amount: form.querySelector('input[name="amount"]').value,
                narration: form.querySelector('input[name="narration"]').value,
                onSuccess: function (response) {
                    console.log('callback Successful Response', response);
                },
                onError: function (response) {
                    console.log('callback Error Response', response);
                },
                onClose: function () {
                    console.log("closed");
                }
            });
            paymentEngine.showPaymentWidget();
        }
    </script>
    <script type="text/javascript" src="https://remitademo.net/payment/v1/remita-pay-inline.bundle.js"></script>
@stop


