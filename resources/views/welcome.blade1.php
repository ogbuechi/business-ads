@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset([% model_header %]) ? [% model_header %] : '[% model_name_title %]' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('[% edit_route_name %]', $[% model_name_singular_variable %]->[% primary_key %] ) }}" class="btn btn-primary" title="[% edit_model %]">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('[% index_route_name %]') }}" class="btn btn-primary" title="[% show_all_models %]">
                                <span class="fa fa-list" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>



                    <div class="row">
                        <div class="col-md-12 col-xl-12">

                            <dl class="dl-horizontal">
                                [% table_rows %]
                            </dl>
                            <form method="POST" action="{!! route('[% destroy_route_name %]', $[% model_name_singular_variable %]->[% primary_key %]) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('[% create_route_name %]') }}" class="btn btn-success" title="[% create_model %]">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="[% delete_model %]" onclick="return confirm(&quot;[% confirm_delete %]?&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection