@extends('layouts.backend')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Create New Sale</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('sales.sale.index') }}" class="btn btn-primary" title="Show All Sale">
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

                            <form method="POST" action="{{ route('sales.sale.store') }}" accept-charset="UTF-8" id="create_sale_form" name="create_sale_form" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @include ('sales.form', [
                                'sale' => null,
                                ])

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input class="btn btn-primary" type="submit" value="Register Deal">
                                    </div>
                                </div>

                            </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection


@section('js')
    <script src="/admin/assets/pages/jquery.property-add.init.js"></script>

    <!-- dropify js -->
    <script src="/plugins/dropify/js/dropify.min.js"></script>
@stop

@section('css')

    <!-- dropify css -->
    <link rel="stylesheet" type="text/css" href="/plugins/dropify/css/dropify.css" />

@stop


