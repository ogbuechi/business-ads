@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box" >
                        <form onsubmit="makePayment()" id="payment-form">
                            <input type="hidden" value="{{ $user->profile->first_name }}" id="js-firstName" name="firstName" class="field-divided" >
                            <input type="hidden" id="js-lastName" value="{{ $user->profile->last_name }}" name="lastName" class="field-divided"/>
                            <input type="hidden" id="js-email" value="{{ $user->email }}" name="email"/>
                            <input type="hidden" id="js-narration" value="Upgrade Account" name="narration"/>
                        <div class="card text-center" style="max-width: 70%; margin: 40px auto auto; padding-bottom: 40px">
                            <div class="card-body">
                                <div class="custom-modal-text payment">
                                    <div class="row">
                                        <div class="one col-xl-4 col-lg-4 col-sm-6">
                                            <div class="card-box widget-box-one">
                                                <i class="mdi mdi-layers widget-one-icon"></i>
                                                <div class="wigdet-one-content">
                                                    <h3 class="m-0 text-uppercase font-600 font-secondary text-overflow">
                                                        ₦{{ $data['one'] }}
                                                    </h3>
                                                    <br>
                                                    <p><b>
                                                                1 Month
                                                        </b> </p>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <input class="radio" id="one" type="radio" value="{{ $data['one'] }}" name="amount"/>

                                        <div class="two col-xl-4 col-lg-4 col-sm-6">
                                            <div class="card-box widget-box-one">
                                                <i class="mdi mdi-layers widget-one-icon"></i>
                                                <div class="wigdet-one-content">
                                                    <h3 class="m-0 text-uppercase font-600 font-secondary text-overflow">₦{{ $data['two'] }}</h3>
                                                    <br>
                                                    <p><b>6 Months</b> </p>

                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <input class="radio" id="two" type="radio" value="{{ $data['two'] }}" name="amount"/>
                                        <div class="twelve col-xl-4 col-lg-4 col-sm-6">
                                            <div class="card-box widget-box-one">
                                                <i class="mdi mdi-layers widget-one-icon"></i>
                                                <div class="wigdet-one-content">
                                                    <h3 class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Your Active Sales Ads"> ₦{{ $data['twelve'] }}</h3>
                                                   <br>
                                                    <p><b>12 + 1 Months </b> </p>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <input class="radio" id="twelve" type="radio" value="{{ $data['twelve'] }}" name="amount"/>
                                    </div>
                                </div>

                                <button class="mt-4 btn btn-success" type="button" onclick="makePayment()">Activate Plan</button>
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

