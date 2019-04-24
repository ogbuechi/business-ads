@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset($partnership->name) ? $partnership->name : 'Partnership' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('partnerships.partnership.edit', $partnership->id ) }}" class="btn btn-primary" title="Edit Partnership">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('partnerships.partnership.index') }}" class="btn btn-primary" title="Show All Partnership">
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
                                            <dt>Name of project</dt>
            <dd>{{ $partnership->name }}</dd>
            <dt>Summary</dt>
            <dd>{{ $partnership->summary }}</dd>
            <dt>Type of Partnership Expected</dt>
            <dd>{{ $partnership->partnership }}</dd>
            <dt>Expected Profit</dt>
            <dd>{{ $partnership->expected_profit }}</dd>
            <dt>Project Stage</dt>
            <dd>{{ $partnership->project_stage }}</dd>
            <dt>Company Type</dt>
            <dd>{{ $partnership->company_type }}</dd>
            <dt>Image</dt>
            <dd>{{ asset('storage/' . $partnership->image) }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('partnerships.partnership.destroy', $partnership->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('partnerships.partnership.create') }}" class="btn btn-success" title="Create New Partnership">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Partnership" onclick="return confirm(&quot;Delete Partnership??&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection