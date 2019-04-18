@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset($sale->name) ? $sale->name : 'Sale' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('sales.sale.edit', $sale->id ) }}" class="btn btn-primary" title="Edit Sale">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('sales.sale.index') }}" class="btn btn-primary" title="Show All Sale">
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
                                            <dt>Name Of Deal</dt>
            <dd>{{ $sale->name }}</dd>
            <dt>Summary Of Deal</dt>
            <dd>{{ $sale->summary }}</dd>
            <dt>Business Type</dt>
            <dd>{{ implode('; ', $sale->business_type) }}</dd>
            <dt>Shareholders</dt>
            <dd>{{ $sale->shareholders }}</dd>
            <dt>Employees</dt>
            <dd>{{ $sale->employees }}</dd>
            <dt>Value</dt>
            <dd>{{ $sale->value }}</dd>
            <dt>Listed</dt>
            <dd>{{ $sale->listed }}</dd>
            <dt>Selling Conditions</dt>
            <dd>{{ $sale->selling_conditions }}</dd>
            <dt>Selling Reasons</dt>
            <dd>{{ $sale->selling_reasons }}</dd>
            <dt>Sales Authorization</dt>
            <dd>{{ $sale->sales_authorization }}</dd>
            <dt>Image</dt>
            <dd>{{ asset('storage/' . $sale->image) }}</dd>
            <dt>User</dt>
            <dd>{{ optional($sale->user)->name }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('sales.sale.destroy', $sale->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('sales.sale.create') }}" class="btn btn-success" title="Create New Sale">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Sale" onclick="return confirm(&quot;Delete Sale??&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection