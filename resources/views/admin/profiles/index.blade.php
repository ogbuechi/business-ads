@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-list bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Profiles</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('profiles.profile.create') }}" class="btn btn-success" title="Create New Profile">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        @if(Session::has('success_message'))
                            <div class="alert alert-success">
                                <span class="glyphicon glyphicon-ok"></span>
                                {!! session('success_message') !!}

                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                        @endif

                        <div class="col-md-12">
        @if(count($profiles) == 0)
            <div class="panel-body text-center">
                <h4>No Profiles Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                                                        <th>User</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Residential Address</th>
                            <th>Parmenent Address</th>
                            <th>Marital Status</th>
                            <th>Sex</th>
                            <th>Date Of Birth</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($profiles as $profile)
                            <tr>
                                                            <td>{{ optional($profile->user)->name }}</td>
                            <td>{{ $profile->first_name }}</td>
                            <td>{{ $profile->last_name }}</td>
                            <td>{{ $profile->phone }}</td>
                            <td>{{ $profile->country }}</td>
                            <td>{{ $profile->state }}</td>
                            <td>{{ $profile->city }}</td>
                            <td>{{ $profile->residential_address }}</td>
                            <td>{{ $profile->parmenent_address }}</td>
                            <td>{{ $profile->marital_status }}</td>
                            <td>{{ $profile->sex }}</td>
                            <td>{{ $profile->date_of_birth }}</td>

                                <td>

                                    <form method="POST" action="{!! route('profiles.profile.destroy', $profile->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('profiles.profile.show', $profile->id ) }}" class="btn btn-info" title="Show Profile">
                                                <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('profiles.profile.edit', $profile->id ) }}" class="btn btn-primary" title="Edit Profile">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete Profile" onclick="return confirm(&quot;Delete Profile?&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
                {!! $profiles->render() !!}
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