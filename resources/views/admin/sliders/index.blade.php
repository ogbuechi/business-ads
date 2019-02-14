@extends('layouts.backend')

@section('content')


    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-sliders bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Home Page Sliders</h5>
                            {{--<span>Advanced Eli Health Record System for Medical Report </span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('sliders.slider.create') }}" class="btn btn-success" title="Create New Slider">
                                    <span class="feather icon-plus " aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @if(Session::has('success_message'))
            <div class="alert alert-success">
                <span class="glyphicon glyphicon-ok"></span>
                {!! session('success_message') !!}

                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
        @endif
        @if(count($sliders) == 0)
            <div class="panel-body text-center">
                <h4>No Sliders Available!</h4>
            </div>
        @else

            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">

                            <div class="row">

                                <div class="col-md-12">
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Is Active</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{ $slider->title }}</td>
                            <td><img style="height: 100px" src="{{ asset($slider->image) }}"></td>
                            <td>{{ ($slider->is_active) ? 'Yes' : 'No' }}</td>

                            <td>

                                <form method="POST" action="{!! route('sliders.slider.destroy', $slider->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('sliders.slider.show', $slider->id ) }}" class="btn btn-info" title="Show Slider">
                                            <span class="feather icon-eye " aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('sliders.slider.edit', $slider->id ) }}" class="btn btn-primary" title="Edit Slider">
                                            <span class="feather icon-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Slider" onclick="return confirm(&quot;Delete Slider?&quot;)">
                                            <span class="feather icon-delete" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $sliders->render() !!}
        </div>
        
        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection