@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">User Roles</h4>
                        @if (Auth::user()->level() > 6)
                        <ol class="breadcrumb p-0 m-0">

                            <li class="breadcrumb-item">
                                <a href="{{ route('roles.role.create') }}" class="btn btn-success" title="Create New Role">
                                    <span class="fa fa-plus" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ol>
                        @endif
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

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
                <div class="col-sm-12">

                    @if(count($roles) == 0)
                        <div class="panel-body text-center">
                            <h4>No Role Available!</h4>
                        </div>
                    @else

                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Roles</b></h4>

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Level</th>
                                    @if (Auth::user()->level() > 6)
                                    <th></th>
                                        @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->slug }}</td>
                                        <td>{{ $role->level }}</td>

                                        @if (Auth::user()->level() > 6)
                                            <td>

                                                <form accept-charset="UTF-8">


                                                    <div class="btn-group btn-group-xs pull-right" role="group">

                                                        <a href="{{ route('roles.role.edit', $role->id ) }}" class="btn btn-primary" title="Edit Role">
                                                            <span class="fa fa-edit" aria-hidden="true"></span>
                                                        </a>

                                                        <button type="submit" class="btn btn-danger" title="Delete Role" onclick="return confirm(&quot;Delete Role?&quot;)">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </div>

                                                </form>

                                            </td>
                                        @endif

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