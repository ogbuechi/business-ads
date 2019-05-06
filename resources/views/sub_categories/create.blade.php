@extends('layouts.backend')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Create New Sub Category</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('sub_categories.sub_category.index') }}" class="btn btn-primary" title="Show All Sub Category">
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

                            <form method="POST" action="{{ route('sub_categories.sub_category.store') }}" accept-charset="UTF-8" id="create_sub_category_form" name="create_sub_category_form" class="form-horizontal">
                                {{ csrf_field() }}
                                @include ('sub_categories.form', [
                                'subCategory' => null,
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


