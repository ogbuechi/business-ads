@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Invests</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('invests.invest.create') }}" class="btn btn-success" title="Create New Invest">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        @endif

                        <div class="col-md-12">
        @if(count($invests) == 0)
            <div class="panel-body text-center">
                <h4>No Invests Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                                                        <th>User</th>
                            <th>Brand Name</th>
                            <th>Business Type</th>
                            <th>Profile Summary</th>
                            <th>Maximum Capital</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invests as $invest)
                            <tr>
                                                            <td>{{ optional($invest->user)->name }}</td>
                            <td>{{ $invest->brand_name }}</td>
                            <td>{{ $invest->business_type }}</td>
                            <td>{{ $invest->profile_summary }}</td>
                            <td>{{ $invest->maximum_capital }}</td>

                                <td>

                                    <form method="POST" action="{!! route('invests.invest.destroy', $invest->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('invests.invest.show', $invest->id ) }}" class="btn btn-info" title="Show Invest">
                                                <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('invests.invest.edit', $invest->id ) }}" class="btn btn-primary" title="Edit Invest">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Invest" onclick="return confirm(&quot;Delete Invest?&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>

                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="panel-footer">
                {!! $invests->render() !!}
            </div>

        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection