@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Your Business 2 Business invests Ads</h4>
                        <ol class="breadcrumb p-0 m-0">

                            <li class="breadcrumb-item">
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
                    <div class="">
                        <div class="panel-body text-center">
                            <h4>No invests Available!</h4>
                        </div>
                    </div>
                @else
                    <div class="col-lg-8">
                        @foreach($invests as $invest)
                            <div class="property-card property-horizontal bg-white">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="property-image" style="background: url('{{ $invest->image }}') center center / cover no-repeat;">
                                            <span class="property-label badge badge-danger">{{ $invest->listed }}</span>
                                        </div>
                                    </div>
                                    <!-- /col 4 -->
                                    <div class="col-sm-8">
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

                                                <a href="{{ route('invests.invest.edit', $invest->id ) }}"  data-toggle="tooltip" data-placement="top" title="" data-original-title="280 square feet"><i class="fa fa-edit"></i><span>Edit</span></a>

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
                    @endforeach
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