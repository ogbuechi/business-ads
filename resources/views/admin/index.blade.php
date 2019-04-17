@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="#">Zircos</a>
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

            <div class="row">

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                            <h2>34578 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 30.4k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-account-convert widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">User Today</p>
                            <h2>895 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 1250</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-layers widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">User This Month</p>
                            <h2>52410 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-av-timer widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Request Per Minute</p>
                            <h2>652 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 956</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-account-multiple widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Users">Total Users</p>
                            <h2>3245 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 20k</p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-2 col-lg-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-download widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="New Downloads">New Downloads</p>
                            <h2>78541 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                            <p class="text-muted m-0"><b>Last:</b> 50k</p>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xl-4">
                    <div class="card-box">

                        <h4 class="header-title m-t-0">Daily Sales</h4>

                        <div class="widget-chart text-center">
                            <div id="morris-donut-example" class="morris-charts" style="height: 245px;"></div>
                            <ul class="list-inline chart-detail-list m-b-0">
                                <li class="list-inline-item">
                                    <h5 class="text-danger"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-success"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card-box">

                        <h4 class="header-title m-t-0">Statistics</h4>
                        <div id="morris-bar-example" class="text-center morris-charts" style="height: 280px;"></div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card-box">

                        <h4 class="header-title m-t-0">Total Revenue</h4>
                        <div id="morris-line-example" class="text-center morris-charts" style="height: 280px;"></div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Recent Users</h4>

                        <div class="table-responsive">
                            <table class="table table-hover table-centered m-0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th>
                                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="thumb-sm rounded-circle" />
                                    </th>
                                    <td>
                                        <h5 class="m-0">{{ $user->name }}</h5>
{{--                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->status }}</td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>

                        </div> <!-- table-responsive -->
                    </div> <!-- end card -->
                </div>
                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Recent Business To Business Invest Ads</h4>

                        <div class="table-responsive">
                            <table class="table table-hover table-centered m-0">
                                <thead>

                                <tr>
                                    <th></th>
                                    <th>Brand Name</th>
                                    <th>Posted By</th>
                                    <th>Business Type</th>
                                    <th>Maximum Capital</th>
                                    <th>Date Posted</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invests as $invest)
                                <tr>
                                    <th>
                                        <img src="https://via.placeholder.com/100x50.png?text=B2B Invest" alt="{{ $invest->brand_name }}" class="thumb-sm" />
                                    </th>
                                    <td>
                                        <h5 class="m-0">{{ $invest->brand_name }}</h5>

{{--                                        <p class="m-0 text-muted font-13"><small>Web designer</small></p>--}}
                                    </td>
                                    <td>{{ optional($invest->user)->name }}</td>
                                    <td>{{ implode('; ', $invest->business_type) }}</td>
                                    <td>{{ $invest->maximum_capital }}</td>
                                    <td>{{ $invest->created_at }}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div> <!-- table-responsive -->
                    </div> <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
@endsection