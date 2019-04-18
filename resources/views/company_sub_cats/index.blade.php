@extends('layouts.backend')

@section('content')
<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Company Sub Cats </h4>
                <ol class="breadcrumb p-0 m-0">

                    <li class="breadcrumb-item">
                        <a href="{{ route('company_sub_cats.company_sub_cat.create') }}" class="btn btn-success" title="Create New Company Sub Cat">
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
            @if(count($companySubCats) == 0)
            <div class="panel-body text-center">
                <h4>No Company Sub Cats Available!</h4>
            </div>
            @else
            <div class="card-box table-responsive">

                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                    <tr>
                                                    <th>Company Category</th>
                            <th>Name</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companySubCats as $companySubCat)
                    <tr>
                                                    <td>{{ optional($companySubCat->companyCat)->name }}</td>
                            <td>{{ $companySubCat->name }}</td>

                        <td>

                            <form method="POST" action="{!! route('company_sub_cats.company_sub_cat.destroy', $companySubCat->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('company_sub_cats.company_sub_cat.show', $companySubCat->id ) }}" class="btn btn-info" title="Show Company Sub Cat">
                                        <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('company_sub_cats.company_sub_cat.edit', $companySubCat->id ) }}" class="btn btn-primary" title="Edit Company Sub Cat">
                                        <span class="fa fa-edit" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Company Sub Cat" onclick="return confirm(&quot;Delete Company Sub Cat?&quot;)">
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
                {!! $companySubCats->render() !!}
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