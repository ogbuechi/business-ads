@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ $title }}</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item mb-2">
                                <a href="{{ route('partnerships.partnership.index') }}" class="btn  btn-success" title="Create New partnership">
                                    All Ads
                                </a>
                            </li>
                            <li class="breadcrumb-item mb-2">
                                <a href="{{ route('partnerships.partnership.awaiting') }}" class="btn  btn-success" title="Create New partnership">
                                    {{--                                    <span class="fa fa-eye" aria-hidden="true"></span>--}}
                                    Awaiting Reviews
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('partnerships.partnership.my_ads') }}" class="btn  btn-success" title="Create New partnership">
                                    {{--                                    <span class="fa fa-list" aria-hidden="true"></span> --}}
                                    My Ads
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('partnerships.partnership.create') }}" class="btn btn-success" title="Create New partnership">
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
                @if(count($partnerships) == 0)
                    <div id="noAd" class="col-md-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4"></div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Post Ad">You Dont Have Any Active Partnership Ads Yet</p>
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
                            @foreach($partnerships as $partnership)
                                <div class="col-sm-6">
                                <div class="property-card property-horizontal bg-white" style="border: {{ !$partnership->status ? '1px solid red' : '' }}">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="property-image" style="background: url('{{ $partnership->image }}') center center / cover no-repeat;">
                                                    <span class="property-label badge badge-danger">{{ $partnership->listed }}</span>
                                                </div>
                                            </div>
                                            <!-- /col 4 -->
                                            <div class="col-sm-6">
                                                <div class="property-content">
                                                    <div class="listingInfo">
                                                        <div class="">
                                                            <h4 class="text-success m-t-0">₦{{ $partnership->expected_profit }}</h4>
                                                        </div>
                                                        <div class="">
                                                            <h4><a href="#" class="text-dark">{{ $partnership->name }}</a></h4>
                                                            <p class="font-13 text-muted m-b-0">{!! $partnership->summary !!}</p>

                                                            {{--                                                    {{ implode('/ ', $partnership->business_type) }}--}}
                                                        </div>

                                                    </div>
                                                    <div class="property-action">

                                                        @if($partnership->user_id == Auth::id())
                                                        <a href="{{ route('partnerships.partnership.edit', $partnership->id ) }}"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Partnership"><i class="fa fa-edit"></i><span>Edit</span></a>
                                                        @endif

                                                        {{--                                        <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="24h Electricity"><i class="mdi mdi-battery-charging-80"></i><span> 24H</span></a>--}}


                                                        <div class="float-right">
                                                            <a href="{{ route('partnerships.partnership.show', $partnership->id ) }}" class="btn btn-light"><i class="far fa-eye"></i><span>View</span></a>
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
                            {!! $partnerships->render() !!}

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

