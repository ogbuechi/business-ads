@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Successful Payments</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">

                    @if(count($payments) == 0)
                        <div class="panel-body text-center">
                            <h4>No Payment Available!</h4>

                        </div>
                    @else

                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>All Payment</b></h4>

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Plan</th>
                                    <th>Period</th>
                                    <th>RRR</th>
                                    <td>Amount</td>
                                    <td>Date Made</td>
                                    <td>Expires On</td>
{{--                                    <th></th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                    <tr>
                                        <td class="text-capitalize">{{ $payment->user->name }}</td>
                                        <td>{{ 'Premium' }}</td>
                                        <td>{{ $payment->month }} Month(s)</td>
                                        <td>{{ $payment->rrr }}</td>
                                        <td>₦{{ $payment->amount }}</td>
                                        <td>{{ $payment->created_at->format('d M Y') }}</td>
                                        <td>{{ $payment->valid_till->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    @endif
                </div>
            </div>

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
