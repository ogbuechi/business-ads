@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-users bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Users</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('users.user.create') }}" class="btn btn-success" title="Create New User">
                                <span class="feather icon-plus" aria-hidden="true"></span>
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
        @if(count($users) == 0)
            <div class="panel-body text-center">
                <h4>No Users Available!</h4>
            </div>
        @else
            <div class="panel-body panel-body-with-table">
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <thead>
                        <tr>
                                                        <th>Name</th>
                            <th>Email</th>
                            <th>Email Verified At</th>
                            <td>Role</td>
                            <td>Status</td>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->email_verified_at }}</td>
                                @foreach($user->roles as $role)
                                <td>{{ $role->name }}</td>
                                @endforeach
                                <td>{{ $user->status }}</td>
                                <td>

                                    <form method="POST" action="{!! route('users.user.destroy', $user->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <a href="{{ route('users.user.show', $user->id ) }}" class="btn btn-info" title="Show User">
                                                <span class="feather icon-eye " aria-hidden="true"></span>
                                            </a>
                                            <a href="{{ route('users.user.edit', $user->id ) }}" class="btn btn-primary" title="Edit User">
                                                <span class="feather icon-edit" aria-hidden="true"></span>
                                            </a>

                                            <button type="submit" class="btn btn-danger" title="Delete User" onclick="return confirm(&quot;Delete User?&quot;)">
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
                {!! $users->render() !!}
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