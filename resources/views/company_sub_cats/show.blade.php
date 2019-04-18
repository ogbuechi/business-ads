@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-xs-8">
                <div class="page-header-title pull-left">
                    <i class="feather icon-eye bg-c-blue"></i>
                    <div class="d-inline">
                        <h4 class="mt-5 mb-5">{{ isset($companySubCat->name) ? $companySubCat->name : 'Company Sub Cat' }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('company_sub_cats.company_sub_cat.edit', $companySubCat->id ) }}" class="btn btn-primary" title="Edit Company Sub Cat">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('company_sub_cats.company_sub_cat.index') }}" class="btn btn-primary" title="Show All Company Sub Cat">
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
                                            <dt>Company Category</dt>
            <dd>{{ optional($companySubCat->companyCat)->name }}</dd>
            <dt>Name</dt>
            <dd>{{ $companySubCat->name }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('company_sub_cats.company_sub_cat.destroy', $companySubCat->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('company_sub_cats.company_sub_cat.create') }}" class="btn btn-success" title="Create New Company Sub Cat">
                                        <span class="fa fa-plus" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Company Sub Cat" onclick="return confirm(&quot;Delete Company Sub Cat??&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>


</div>
</div>

@endsection