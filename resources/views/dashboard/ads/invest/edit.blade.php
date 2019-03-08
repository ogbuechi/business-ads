@extends('layouts.master')

@section('content')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="row page-content">




            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="inner-box">

        <div class="page-header card">

            <div class="row">
<h4>{{ $invest->brand_name }}</h4>
            </div>

        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row">
                            <div class="col-md-12 col-xl-12">

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ route('invests.invest.update', $invest->id) }}" id="edit_invest_form" name="edit_invest_form" accept-charset="UTF-8" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PUT">
                                    @include ('invests.form', [
                                                                'invest' => $invest,
                                                              ])

                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-10">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>

@endsection