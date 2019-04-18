@extends('layouts.backend')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ !empty($company->name) ? $company->name : 'Company' }}</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('companies.company.index') }}" class="btn btn-primary" title="Show All Company">
                            <span class="fa fa-list" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('companies.company.create') }}" class="btn btn-primary" title="Create New Company">
                            <span class="fa fa-plus" aria-hidden="true"></span>
                        </a>
                    </li>

                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                            @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <form method="POST" action="{{ route('companies.company.update', $company->id) }}" id="edit_company_form" name="edit_company_form" accept-charset="UTF-8" class="form-horizontal">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PUT">
                                @include ('companies.form', [
                                'company' => $company,
                                ])

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-primary" type="submit" value="Update">
                                    </div>
                                </div>
                            </form>


            </div>
        </div>
    </div>
</div>
</div>

@endsection