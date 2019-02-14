@extends('layout.backend')

@section('content')


        <div class="pcoded-content">
            <div class="page-header card">
                <div class="row">
                    <div class="col-lg-8 col-xs-8">
                        <div class="page-header-title pull-left">
                            <i class="feather icon-eye bg-c-blue"></i>
                            <div class="d-inline">
                                <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Profile' }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('profiles.profile.edit', $profile->id ) }}" class="btn btn-primary" title="Edit Profile">

                                    <span class="feather icon-edit" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('profiles.profile.index') }}" class="btn btn-primary" title="Show All Profile">
                                        <span class="feather icon-list" aria-hidden="true"></span>
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
                                <div class="col-md-12 col-xl-12">

            <dl class="dl-horizontal">
                            <dt>User</dt>
            <dd>{{ optional($profile->user)->name }}</dd>
            <dt>First Name</dt>
            <dd>{{ $profile->first_name }}</dd>
            <dt>Last Name</dt>
            <dd>{{ $profile->last_name }}</dd>
            <dt>Phone</dt>
            <dd>{{ $profile->phone }}</dd>
            <dt>Country</dt>
            <dd>{{ $profile->country }}</dd>
            <dt>State</dt>
            <dd>{{ $profile->state }}</dd>
            <dt>City</dt>
            <dd>{{ $profile->city }}</dd>
            <dt>Residential Address</dt>
            <dd>{{ $profile->residential_address }}</dd>
            <dt>Parmenent Address</dt>
            <dd>{{ $profile->parmenent_address }}</dd>
            <dt>Marital Status</dt>
            <dd>{{ $profile->marital_status }}</dd>
            <dt>Sex</dt>
            <dd>{{ $profile->sex }}</dd>
            <dt>Date Of Birth</dt>
            <dd>{{ $profile->date_of_birth }}</dd>

            </dl>
                                    <form method="POST" action="{!! route('profiles.profile.destroy', $profile->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}
                                        <div class="btn-group btn-group-sm" role="group">

                                            <a href="{{ route('profiles.profile.create') }}" class="btn btn-success" title="Create New Profile">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </a>
                                            <button type="submit" class="btn btn-danger" title="Delete Profile" onclick="return confirm(&quot;Delete Profile??&quot;)">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection