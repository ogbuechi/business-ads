@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Your Business 2 Business Sales Ads</h4>
                <ol class="breadcrumb p-0 m-0">

                    <li class="breadcrumb-item">
                        <a href="{{ route('sales.sale.create') }}" class="btn btn-success" title="Create New Sale">
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
                @if(count($sales) == 0)
                    <div class="">
                    <div class="panel-body text-center">
                        <h4>No Sales Available!</h4>
                    </div>
                    </div>
                @else
                <div class="col-lg-8">
                    @foreach($sales as $sale)
                    <div class="property-card property-horizontal bg-white">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="property-image" style="background: url('{{ $sale->image }}') center center / cover no-repeat;">
                                    <span class="property-label badge badge-danger">{{ $sale->listed }}</span>
                                </div>
                            </div>
                            <!-- /col 4 -->
                            <div class="col-sm-8">
                                <div class="property-content">
                                    <div class="listingInfo">
                                        <div class="">
                                            <h4 class="text-success m-t-0">N{{ $sale->value }}</h4>
                                        </div>
                                        <div class="">
                                            <h4><a href="#" class="text-dark">{{ $sale->name }}</a></h4>
                                            <p class="font-13 text-muted m-b-0">{!! $sale->summary !!}</p>

                                            {{ implode('/ ', $sale->business_type) }}
                                        </div>

                                    </div>
                                    <div class="property-action">

                                        <a href="{{ route('sales.sale.edit', $sale->id ) }}"  data-toggle="tooltip" data-placement="top" title="" data-original-title="280 square feet"><i class="fa fa-edit"></i><span>Edit</span></a>

{{--                                        <a href="#" target="new_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="24h Electricity"><i class="mdi mdi-battery-charging-80"></i><span> 24H</span></a>--}}


                                        <div class="float-right">
                                            <a href="{{ route('sales.sale.show', $sale->id ) }}" class="btn btn-light"><i class="far fa-eye"></i><span>View</span></a>
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
                            {!! $sales->render() !!}

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