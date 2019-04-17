@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Invest' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('invests.invest.edit', $invest->id ) }}" class="btn btn-primary" title="Edit Invest">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('invests.invest.index') }}" class="btn btn-primary" title="Show All Invest">
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
                                            <dt>User</dt>
            <dd>{{ optional($invest->user)->name }}</dd>
            <dt>Brand Name</dt>
            <dd>{{ $invest->brand_name }}</dd>
            <dt>Business Type</dt>
            <dd>{{ implode('; ', $invest->business_type) }}</dd>
            <dt>Profile Summary</dt>
            <dd>{{ $invest->profile_summary }}</dd>
            <dt>Maximum Capital</dt>
            <dd>{{ $invest->maximum_capital }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('invests.invest.destroy', $invest->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('invests.invest.create') }}" class="btn btn-success" title="Create New Invest">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Invest" onclick="return confirm(&quot;Delete Invest??&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection