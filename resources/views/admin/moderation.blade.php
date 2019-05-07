@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard
                            <button id="showPost" class="btn btn-success btm-sm">Post Ad</button>
                        </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="#">Gloseed Admin</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            @if(count($ads) < 1)
                <div id="noAd" class="row">
                    <div class="col-xl-4 col-lg-4"></div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Post Ad">You Dont Have Any Active Ads Yet</p>
                                <div class="text-center m-t-30">
                                    <i class="fa fa-plus fa-2x"></i><br>
                                    <a href="#custom-modal" class="m-t-5 btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="door" data-plugin="custommodal"
                                       data-overlaySpeed="100" data-overlayColor="#36404a">Post New Ad</a>
                                </div>

                                {{--                            <h2>{{ $count['invest'] }} <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>--}}
                                {{--                            @if ($count['invest'] > 1)--}}
                                {{--                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.index') }}">View Ads</a> </b> </p>--}}
                                {{--                            @else--}}
                                {{--                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.create') }}">Post Your First Ad</a> </b> </p>--}}
                                {{--                            @endif--}}
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
            @endif

            <div id="post" style="display: none" class="row">
                <div class="col-xl-4 col-lg-4"></div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Post Ad">You Dont Have Any Active Ads Yet</p>
                            <div class="text-center m-t-30">
                                <i class="fa fa-plus fa-2x"></i><br>
                                <a href="#custom-modal" class="m-t-5 btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="door" data-plugin="custommodal"
                                   data-overlaySpeed="100" data-overlayColor="#36404a">Post New Ad</a>
                            </div>

                            {{--                            <h2>{{ $count['invest'] }} <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>--}}
                            {{--                            @if ($count['invest'] > 1)--}}
                            {{--                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.index') }}">View Ads</a> </b> </p>--}}
                            {{--                            @else--}}
                            {{--                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.create') }}">Post Your First Ad</a> </b> </p>--}}
                            {{--                            @endif--}}
                        </div>
                    </div>
                </div><!-- end col -->
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Business Investors Ads">Total Business Investors Ads</p>
                            <h2>{{ $count['invest'] }} <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            @if ($count['invest'] > 1)
                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.index') }}">View Ads</a> </b> </p>
                            @else
                                <p class="text-muted m-0"><b><a href="{{ route('invests.invest.create') }}">Post Your First Ad</a> </b> </p>
                            @endif
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-account-convert widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Your Total Open Partnership Ads">Your Total Open Partnership Ads</p>
                            <h2> {{ $count['partnership'] }}<small><i class="mdi mdi-arrow-right text-success"></i></small></h2>
                            @if ($count['partnership'] > 1)
                                <p class="text-muted m-0"><b><a href="{{ route('partnerships.partnership.index') }}">View Ads</a> </b> </p>
                            @else
                                <p class="text-muted m-0"><b><a href="{{ route('partnerships.partnership.create') }}">Post Your First Ad</a> </b> </p>
                            @endif
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-layers widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Your Total Sales Ads">Your Total Business Sales Ads</p>
                            <h2>{{ $count['sales'] }}<small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            @if ($count['sales'] > 1)
                                <p class="text-muted m-0"><b><a href="{{ route('sales.sale.index') }}">View Ads</a> </b> </p>
                            @else
                                <p class="text-muted m-0"><b><a href="{{ route('sales.sale.create') }}">Post Your First Ad</a> </b> </p>
                            @endif
                        </div>
                    </div>
                </div><!-- end col -->


            </div>
            <!-- end row -->

            <!-- end row -->


            <div class="row">

                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Ads Under Moderation

                            <ol style="float: right" class="breadcrumb p-0 m-0">

                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}" class="btn  btn-success" title="Moderation">
                                        Active Ads
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="" class="btn  btn-success" title="Create New invest">
                                        {{--                                    <span class="fa fa-list" aria-hidden="true"></span> --}}
                                        List View
                                    </a>
                                </li>

                            </ol>

                        </h4>

                        <div class="row">
                            @foreach($ads as $sale)
                                <div class="col-md-6">
                                    <div class="property-card property-horizontal bg-white" style="border: {{ !$sale['status'] ? '1px solid red' : '' }}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="property-image" style="background: url('{{ $sale['image'] }}') center center / cover no-repeat;">
                                                    {{--                                                    <span class="property-label badge badge-danger">{{ $sale->listed }}</span>--}}
                                                </div>
                                            </div>
                                            <!-- /col 4 -->
                                            <div class="col-sm-6">
                                                <div class="property-content">
                                                    <div class="listingInfo">
                                                        <div class="">
                                                            {{--                                                            <h4 class="text-success m-t-0">N{{ $sale['value'] }}</h4>--}}
                                                        </div>
                                                        <div class="">
                                                            <h4><a href="#" class="text-dark">
                                                                    @if($sale['type'] == 'Investors')
                                                                        {{ $sale['brand_name'] }}
                                                                    @else
                                                                        {{ $sale['name'] }}
                                                                    @endif
                                                                </a></h4>
                                                            <p class="font-13 text-muted m-b-0">{!! $sale['summary'] !!}</p>

                                                            @if ($sale['type'] != 'Open Partnership')
                                                                {{ implode('/ ', $sale['business_type']) }}
{{--                                                            @else--}}
{{--                                                                {{ implode('/ ', $sale['business_type']) }}--}}
                                                            @endif
                                                        </div>

                                                    </div>
                                                    <div class="property-action">

                                                        <a href="{{ route('sales.sale.edit', $sale['id'] ) }}"  data-toggle="tooltip" data-placement="top" title="" data-original-title="280 square feet"><i class="fa fa-edit"></i><span>Edit</span></a>

                                                        {{--                                        <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="24h Electricity"><i class="mdi mdi-battery-charging-80"></i><span> 24H</span></a>--}}


                                                        <div class="float-right">
                                                            <a href="{{ route('sales.sale.show', $sale['id'] ) }}" class="btn btn-light"><i class="far fa-eye"></i><span>View</span></a>
                                                        </div>
                                                    </div>
                                                    <!-- end. Card actions -->
                                                </div>
                                            </div>
                                            <!-- /col 8 -->
                                        </div>
                                        <!-- /inner row -->
                                    </div>
                                </div>
                            @endforeach
                        </div>

{{--                        <div class="table-responsive">--}}
{{--                            <table class="table table-hover table-centered m-0">--}}
{{--                                <thead>--}}

{{--                                <tr>--}}
{{--                                    <th></th>--}}
{{--                                    <th>Brand Name</th>--}}
{{--                                    <th>Posted By</th>--}}
{{--                                    <th>Business Type</th>--}}
{{--                                    <th>Maximum Capital</th>--}}
{{--                                    <th>Date Posted</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                --}}{{--                                @foreach($invests as $invest)--}}
{{--                                --}}{{--                                <tr>--}}
{{--                                --}}{{--                                    <th>--}}
{{--                                --}}{{--                                        <img src="https://via.placeholder.com/100x50.png?text=B2B Invest" alt="{{ $invest->brand_name }}" class="thumb-sm" />--}}
{{--                                --}}{{--                                    </th>--}}
{{--                                --}}{{--                                    <td>--}}
{{--                                --}}{{--                                        <h5 class="m-0">{{ $invest->brand_name }}</h5>--}}

{{--                                --}}{{--                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
{{--                                --}}{{--                                    </td>--}}
{{--                                --}}{{--                                    <td>{{ optional($invest->user)->name }}</td>--}}
{{--                                --}}{{--                                    <td>{{ implode('; ', $invest->business_type) }}</td>--}}
{{--                                --}}{{--                                    <td>{{ $invest->maximum_capital }}</td>--}}
{{--                                --}}{{--                                    <td>{{ $invest->created_at }}</td>--}}
{{--                                --}}{{--                                </tr>--}}
{{--                                --}}{{--                                @endforeach--}}

{{--                                </tbody>--}}
{{--                            </table>--}}

{{--                        </div> <!-- table-responsive -->--}}
                    </div> <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
@endsection