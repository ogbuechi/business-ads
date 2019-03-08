@extends('layouts.master')

@section('content')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row page-content">




            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="inner-box">
                    @if(Session::has('success_message'))
                        <div class="">
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        </div>
                    @endif
                    <div class="dashboard-box">
                        <h2 class="dashbord-title">Create B2B Invest Ad</h2>
                    </div>

                        <div class="row">
                            <div class="col-md-12 col-xl-12">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('invests.invest.store') }}" accept-charset="UTF-8" id="create_invest_form" name="create_invest_form" class="form-horizontal">
                {{ csrf_field() }}
                @include ('invests.form', [
                                            'invest' => null,
                                          ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Create">
                    </div>
                </div>

            </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection


