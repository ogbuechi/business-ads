@extends('layouts.backend')

@section('content')

<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ !empty($slider->title) ? $slider->title : 'Slider' }}</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('sliders.slider.index') }}" class="btn btn-primary" title="Show All Slider">
                            <span class="fa fa-list" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('sliders.slider.create') }}" class="btn btn-primary" title="Create New Slider">
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

                            <form method="POST" action="{{ route('sliders.slider.update', $slider->id) }}" id="edit_slider_form" name="edit_slider_form" accept-charset="UTF-8" class="form-horizontal">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PUT">
                                @include ('sliders.form', [
                                'slider' => $slider,
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