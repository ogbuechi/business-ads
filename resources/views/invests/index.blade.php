@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ $title }}</h4>
                        <ol class="breadcrumb p-0 m-0">

                            <li class="breadcrumb-item mt-2">
                                <a href="{{ route('invests.invest.index') }}" class="btn  btn-success" title="Create New invest">
{{--                                    <span class="fa fa-eye" aria-hidden="true"></span>--}}
                                    All Invest Ads
                                </a>
                            </li>
                            <li class="breadcrumb-item mt-2">
                                <a href="{{ route('invests.invest.awaiting') }}" class="btn  btn-success" title="Create New invest">
{{--                                    <span class="fa fa-eye" aria-hidden="true"></span>--}}
                                    Awaiting Reviews
                                </a>
                            </li>
                            <li class="breadcrumb-item mt-2">
                                <a href="{{ route('invests.invest.my_ads') }}" class="btn  btn-success" title="Create New invest">
{{--                                    <span class="fa fa-list" aria-hidden="true"></span> --}}
                                    My Ads
                                </a>
                            </li>
                            <li class="breadcrumb-item mt-2">
                                <a href="{{ route('invests.invest.create') }}" class="btn btn-success" title="Create New invest">
                                    <span class="fa fa-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            {!! session('success_message') !!}

                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @if(count($invests) == 0)
                    <div id="noAd" class="col-md-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4"></div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Post Ad">You Dont Have Any Active Invest Ads Yet</p>
                                        <div class="text-center m-t-30">
                                            <i class="fa fa-plus fa-2x"></i><br>
                                            <a href="#custom-modal" class="m-t-5 btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="door" data-plugin="custommodal"
                                               data-overlaySpeed="100" data-overlayColor="#36404a">Post New Ad</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>

                    </div>
                @else
                    <div class="col-lg-12">
                            <div class="row">
                        @foreach($invests as $invest)
                                    <div class="col-sm-6">
                            <div class="property-card property-horizontal bg-white" style="border: {{ !$invest->status ? '1px solid red' : '' }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="property-image" style="background: url('{{ $invest->image }}') center center / cover no-repeat;">
                                            <span class="property-label badge badge-danger">{{ $invest->listed }}</span>
                                        </div>
                                    </div>
                                    <!-- /col 4 -->
                                    <div class="col-sm-6">
                                        <div class="property-content">
                                            <div class="listingInfo">
                                                <div class="">
                                                    <h4 class="text-success m-t-0">N{{ $invest->value }}</h4>
                                                </div>
                                                <div class="">
                                                    <h4><a href="#" class="text-dark">{{ $invest->brand_name }}</a></h4>

                                                    <p class="font-13 text-muted m-b-0">{!! $invest->summary !!}</p>

                                                    <ol class="breadcrumb p-0 m-0">
@foreach($invest->business_type as $item)
                                                        <li class="breadcrumb-item">
                                                               {{ $item }}
                                                        </li>
    @endforeach
                                                    </ol>
{{--                                                    {{ implode('; ', $invest->business_type) }}--}}
                                                </div>

                                            </div>
                                            <div class="property-action">

                                                @if($invest->user_id == Auth::id())
                                                <a href="{{ route('invests.invest.edit', $invest->id ) }}"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Invests"><i class="fa fa-edit"></i><span>Edit</span></a>
                                                @endif

                                                {{--                                        <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="24h Electricity"><i class="mdi mdi-battery-charging-80"></i><span> 24H</span></a>--}}


                                                <div class="float-right">
                                                    <a href="{{ route('invests.invest.show', $invest->id ) }}" class="btn btn-light"><i class="far fa-eye"></i><span>View</span></a>
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
                    <!-- End property item -->

                            <div>
                                {!! $invests->render() !!}

                            </div>
                    </div>
                    <!--END MAIN COL-8 -->

                    <!-- end col -->
                @endif

            </div>
            <!-- end row -->





        </div>
    </div>

@endsection


@section('js')
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap4.min.js"></script>


    <script src="/plugins/datatables/dataTables.responsive.min.js"></script>

    <!-- init -->
    <script src="/assets/pages/jquery.datatables.init.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>
@stop

@section('css')
    <!-- DataTables -->
    <link href="/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

@stop
