@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Companies </h4>
                <ol class="breadcrumb p-0 m-0">

                    <li class="breadcrumb-item">
                        <a href="{{ route('companies.company.create') }}" class="btn btn-success" title="Create New Company">
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



        <div class="col-md-12">
            @if(count($companies) == 0)
            <div class="panel-body text-center">
                <h4>No Companies Available!</h4>
            </div>
            @else
            <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                    <tr>
                                                    <th>User</th>
                            <th>Company Name</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Representative Phone Number</th>
                            <th>Representative Name</th>
                            <th>Website Url</th>
                            <th>Categories</th>
                            <th>Employees</th>
                            <th>Years</th>
                            <th>Is Active</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                    <tr>
                                                    <td>{{ optional($company->user)->name }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->country }}</td>
                            <td>{{ $company->state }}</td>
                            <td>{{ $company->city }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->rep_phone }}</td>
                            <td>{{ $company->rep_name }}</td>
                            <td>{{ $company->website }}</td>
                            <td>{{ implode('; ', $company->categories) }}</td>
                            <td>{{ $company->employees }}</td>
                            <td>{{ $company->years }}</td>
                            <td>{{ ($company->is_active) ? 'Yes' : 'No' }}</td>

                        <td>

                            <form method="POST" action="{!! route('companies.company.destroy', $company->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('companies.company.show', $company->id ) }}" class="btn btn-info" title="Show Company">
                                        <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('companies.company.edit', $company->id ) }}" class="btn btn-primary" title="Edit Company">
                                        <span class="fa fa-edit" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Company" onclick="return confirm(&quot;Delete Company?&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

            <div class="panel-footer">
                {!! $companies->render() !!}
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