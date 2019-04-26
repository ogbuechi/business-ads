@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box" >

                        <div class="card text-center" style="max-width: 70%; margin: 40px auto auto; padding-bottom: 40px">
{{--                            <div class="card-heading bg-warning">--}}
{{--                                <h3 class="card-title text-white">Card Primary</h3>--}}
{{--                                <p class="card-sub-title font-13">Sub title goes here with small font</p>--}}
{{--                            </div>--}}
                            <div class="card-body">
                                <p class="mt-1 h3" style="color: #c9174e;">You cannot view "Deals" or "Basic Information on the Deals" or "Bid on Deals"
                                    unless you upgrade to Premium User.</p>
                                <br>
                                <p class="h4 mb-1"><i class="fa fa-lock" aria-hidden="true"></i> In order to use "GLOSEED ALL FEATURES", please upgrade account to premium.</p>


                                <a href="" class="mt-4 btn btn-success">UPGRADE ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


