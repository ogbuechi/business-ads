@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-settings bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Application Settings</h5>
                            {{--<span>Advanced Eli Health Record System for Medical Report </span>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item"><a href="{{ route('settings.setting.create') }}" class="btn btn-success" title="Create New Setting">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </a></li>
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


        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row">

                            <div class="col-md-12">

        
        @if(count($settings) == 0)
            <div class="panel-body text-center">
                <h4>No Settings Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Value</th>
                            <th>Locale</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <td>{{ $setting->key }}</td>
                            <td>{{ $setting->value }}</td>
                            <td>{{ $setting->locale }}</td>

                            <td>

                                <form method="POST" action="{!! route('settings.setting.destroy', $setting->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('settings.setting.show', $setting->id ) }}" class="btn btn-info" title="Show Setting">
                                            <span class="feather icon-eye" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('settings.setting.edit', $setting->id ) }}" class="btn btn-primary" title="Edit Setting">
                                            <span class="feather icon-edit" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Setting" onclick="return confirm(&quot;Delete Setting?&quot;)">
                                            <span class="feather icon-trash" aria-hidden="true"></span>
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
            {!! $settings->render() !!}
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