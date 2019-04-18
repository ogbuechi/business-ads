@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset($company->name) ? $company->name : 'Company' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('companies.company.edit', $company->id ) }}" class="btn btn-primary" title="Edit Company">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('companies.company.index') }}" class="btn btn-primary" title="Show All Company">
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
            <dd>{{ optional($company->user)->name }}</dd>
            <dt>Company Name</dt>
            <dd>{{ $company->name }}</dd>
            <dt>Description</dt>
            <dd>{{ $company->description }}</dd>
            <dt>Country</dt>
            <dd>{{ $company->country }}</dd>
            <dt>State</dt>
            <dd>{{ $company->state }}</dd>
            <dt>City</dt>
            <dd>{{ $company->city }}</dd>
            <dt>Address</dt>
            <dd>{{ $company->address }}</dd>
            <dt>Representative Phone Number</dt>
            <dd>{{ $company->rep_phone }}</dd>
            <dt>Representative Name</dt>
            <dd>{{ $company->rep_name }}</dd>
            <dt>Website Url</dt>
            <dd>{{ $company->website }}</dd>
            <dt>Categories</dt>
            <dd>{{ implode('; ', $company->categories) }}</dd>
            <dt>Employees</dt>
            <dd>{{ $company->employees }}</dd>
            <dt>Years</dt>
            <dd>{{ $company->years }}</dd>
            <dt>Is Active</dt>
            <dd>{{ ($company->is_active) ? 'Yes' : 'No' }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('companies.company.destroy', $company->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('companies.company.create') }}" class="btn btn-success" title="Create New Company">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Company" onclick="return confirm(&quot;Delete Company??&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection