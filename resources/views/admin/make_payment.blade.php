@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="col-xl-9 center-page">
                            <div class="text-center">
                                <h3 class="m-b-30 m-t-20">Upgrade Your Account</h3>
                                @if (Auth::user()->plan->level == 0)
                                    Upgrading your account to premium will unlock many Gloseed features,<br> see plan below for list of features
                                @endif
                            </div>
                        </div>

                        <form onsubmit="makePayment()" id="payment-form">
                            <input type="hidden" value="{{ $user->profile->first_name }}" id="js-firstName" name="firstName" class="field-divided" >
                            <input type="hidden" id="js-lastName" value="{{ $user->profile->last_name }}" name="lastName" class="field-divided"/>
                            <input type="hidden" id="js-email" value="{{ $user->email }}" name="email"/>
                            <input type="hidden" id="js-narration" value="Upgrade Account" name="narration"/>
                        <div class="card text-center" style="max-width: 100%; margin: 40px auto auto; padding-bottom: 40px">
                            <div class="card-body">
                                <div class="custom-modal-text payment">
                                    <div class="row">
                                        <div class="one pricing-column col-sm-12 col-lg-4">
                                            <div class="ribbon"><span>1 Month</span></div>
                                                <div class="inner-box card-box" style="padding: 0">
                                                    <div class="plan-header text-center" style="padding: 0">
{{--                                                        <h3 class="plan-title">Premium Plan</h3>--}}
                                                        <h2 class="plan-price"> ${{ $data['one_d'] }}</h2>
                                                        <div class="plan-duration">Per Month</div>
                                                    </div>
                                                    <ul class="plan-stats list-unstyled text-center" style="padding: 0">
                                                        <li><strong>View</strong> Listed Ads</li>
                                                        <li><strong>Business</strong> Ad posting</li>
                                                        <li><strong>View</strong> Poster Details</li>
                                                        <li><strong>View </strong> Ads Details</li>
                                                        <li><strong>View </strong> Company Details</li>
                                                        <li><strong>Live Chat</strong> with Ad poster!</li>
                                                        <li>Email Support</li>
                                                        <li>24x7 Support</li>
                                                    </ul>
                                                </div>
                                        </div>

                                        <input class="radio" id="one" type="radio" value="{{ $data['one'] }}" name="amount"/>

                                        <div class="two pricing-column col-sm-12 col-lg-4" >
                                            <div class="ribbon"><span>6 Month</span></div>
                                            <div class="inner-box card-box" style="padding: 0">
                                                <div class="plan-header text-center" style="padding: 0">
                                                    {{--                                                        <h3 class="plan-title">Premium Plan</h3>--}}
                                                    <h2 class="plan-price"> ${{ $data['two_d'] }}</h2>
                                                    <div class="plan-duration">5% off</div>
                                                </div>
                                                <ul class="plan-stats list-unstyled text-center" style="padding: 0">
                                                    <li><strong>View</strong> Listed Ads</li>
                                                    <li><strong>Business</strong> Ad posting</li>
                                                    <li><strong>View</strong> Poster Details</li>
                                                    <li><strong>View </strong> Ads Details</li>
                                                    <li><strong>View </strong> Company Details</li>
                                                    <li><strong>Live Chat</strong> with Ad poster!</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input class="radio" id="two" type="radio" value="{{ $data['two'] }}" name="amount"/>

                                        <div class="two pricing-column col-sm-12 col-lg-4" >
                                            <div class="ribbon"><span>12 + 1 Month</span></div>
                                            <div class="inner-box card-box" style="padding: 0">
                                                <div class="plan-header text-center" style="padding: 0">
                                                    {{--                                                        <h3 class="plan-title">Premium Plan</h3>--}}
                                                    <h2 class="plan-price"> ${{ $data['twelve_d'] }}</h2>
                                                    <div class="plan-duration">21% off</div>
                                                </div>
                                                <ul class="plan-stats list-unstyled text-center" style="padding: 0">
                                                    <li><strong>View</strong> Listed Ads</li>
                                                    <li><strong>Business</strong> Ad posting</li>
                                                    <li><strong>View</strong> Poster Details</li>
                                                    <li><strong>View </strong> Ads Details</li>
                                                    <li><strong>View </strong> Company Details</li>
                                                    <li><strong>Live Chat</strong> with Ad poster!</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input class="radio" id="twelve" type="radio" value="{{ $data['twelve'] }}" name="amount"/>
                                    </div>
                                </div>

                                <button class="btn btn-success" type="button" onclick="makePayment()">Activate Plan</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')
    <script>
        let url = "{{ route('payments.payment.store') }}";
        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        let user_id = "{{ Auth::user()->id }}";
        let second = "{{ $data['two'] }}";
        let third = "{{ $data['twelve'] }}";
        $(document).ready(function () {

            $('.one').click(function() {
                $("#one").prop("checked", true);
                $('.hli').toggleClass('hli');
                $(this).toggleClass('hli');
            });
            $('.two').click(function() {
                $("#two").prop("checked", true);
                $('.hli').toggleClass('hli');
                $(this).toggleClass('hli');
            });
            $('.twelve').click(function() {
                $("#twelve").prop("checked", true);
                $('.hli').toggleClass('hli');
                $(this).toggleClass('hli');
            });

        });
        function makePayment() {
            var form = document.querySelector("#payment-form");
            let amount = form.querySelector('input[name="amount"]:checked').value;
            var month;
            if(amount == second){ month = 6; }
            else if(amount == third){ month = 13 }else{
                month = 1
            }

            var paymentEngine = RmPaymentEngine.init({
                key: 'SlVERU98NDIzNzMwNDZ8N2QyOWNmZmZlNTdmMTA5MTYwYjFkYzAyYTM4ZDljYzljNzZkYWFmMjdhY2UyMDhjOGE2NTgwZDkyNDMzOGZjNzJlMTZkZGE3M2NhYjZjYWE2NDIzMGE2YzMzNWE4OTM4YWFlZGIxYmQ3NmEyNjk5NDVjM2Q4ODkyMTExODlhNWY=',
                customerId: form.querySelector('input[name="email"]').value,
                firstName: form.querySelector('input[name="firstName"]').value,
                lastName: form.querySelector('input[name="lastName"]').value,
                email: form.querySelector('input[name="email"]').value,
                amount: form.querySelector('input[name="amount"]:checked').value,
                // amount: form.querySelector('input[name="amount"]').value,
                narration: form.querySelector('input[name="narration"]').value,
                onSuccess: function (response) {
                    $.ajax({
                        url : url,
                        type : "POST",
                        data : {_token: CSRF_TOKEN, user_id:user_id, amount:amount, rrr:response.paymentReference, month:month},
                        success : function(data) {

                            new Noty({
                                type: 'success',
                                layout: 'bottomRight',
                                theme: 'metroui',
                                text: data.message,
                                timeout: 8000,
                                progressBar: true,
//                            closeWith: ['click', 'button'],
                                animation: {
                                    open: 'noty_effects_open',
                                    close: 'noty_effects_close'
                                },
                                id: false,
                                force: false,
                                killer: false,
                                queue: 'global',
                                container: false,

                                modal: false
                            }).show()
                        }
                    });

                    // console.log('callback Successful Response', response);
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

