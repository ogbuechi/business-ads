@extends('layouts.backend')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Create New Company Sub Cat</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('company_sub_cats.company_sub_cat.index') }}" class="btn btn-primary" title="Show All Company Sub Cat">
                            <span class="fa fa-list" aria-hidden="true"></span>
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

                            <form method="POST" action="{{ route('company_sub_cats.company_sub_cat.store') }}" accept-charset="UTF-8" id="create_company_sub_cat_form" name="create_company_sub_cat_form" class="form-horizontal">
                                {{ csrf_field() }}
                                @include ('company_sub_cats.form', [
                                'companySubCat' => null,
                                ])

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-primary" type="submit" value="Add">
                                    </div>
                                </div>

                            </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection


