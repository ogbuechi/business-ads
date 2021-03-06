@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">
    <div class="row">
<div class="col-sm-12">
    <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($slider->title) ? $slider->title : 'Slider' }}</h4>
        </span>

    <div class="pull-right">

        <form method="POST" action="{!! route('sliders.slider.destroy', $slider->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{ route('sliders.slider.index') }}" class="btn btn-primary" title="Show All Slider">
                    <span class="fa fa-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('sliders.slider.create') }}" class="btn btn-success" title="Create New Slider">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>

                <a href="{{ route('sliders.slider.edit', $slider->id ) }}" class="btn btn-primary" title="Edit Slider">
                    <span class="fa fa-edit" aria-hidden="true"></span>
                </a>

                <button type="submit" class="btn btn-danger" title="Delete Slider" onclick="return confirm(&quot;Delete Slider??&quot;)">
                    <span class="fa fa-trash" aria-hidden="true"></span>
                </button>
            </div>
        </form>

    </div>
</div>


    </div>
<div class="row">
    <div class="col-sm-12">
    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $slider->title }}</dd>
            <dt>Description</dt>
            <dd>{{ $slider->description }}</dd>
            <dt>Image</dt>
            <dd><img src="{{ asset($slider->image) }}" class="img-responsive"></dd>
            <dt>Is Active</dt>
            <dd>{{ ($slider->is_active) ? 'Yes' : 'No' }}</dd>

        </dl>

    </div>
    </div>
</div>

</div>
    </div>
@endsection