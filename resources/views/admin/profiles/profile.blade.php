@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ $user->name }} Profile </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Profile
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="text-center card-box">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                            <img src="{{ asset($user->avatar) }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">{{ $user->name }}</h4>
                                            <p class="text-muted mb-2">{{ $user->email }}</p>
                                        </div>

                                        <a href="{{ route('chat.inbox',$user->id) }}" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</a>

                                        {{--                                                    <p class="text-muted font-13 m-t-20">--}}
                                        {{--                                                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.--}}
                                        {{--                                                    </p>--}}

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ $user->name }}</span></p>

                                            {{--                                                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{ $user->profile->phone }}</span></p>--}}

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $user->email }}</span></p>

                                            {{--                                                        <p class="text-muted font-13"><strong>Address :</strong> <span class="m-l-15">{{ $user->profile->address }}</span></p>--}}
                                        </div>

                                        <ul class="social-links list-inline m-t-30">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                            </li>
                                        </ul>

                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->

                            <div class="col-xl-9 col-md-8">
                                <h4>Business Ads</h4>

                                <div class="row m-t-20">
                                    <div class="col-lg-4 col-sm-6 text-center">
                                        <div class="p-t-10">
                                            <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                                   data-fgColor="#2abfcc" value="{{ $invests }}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                            <h6 class="text-muted m-t-10">Business Invest Ads</h6>
                                        </div>
                                    </div><!-- end col-->

                                    <div class="col-lg-4 col-sm-6 text-center">
                                        <div class="p-t-10">
                                            <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                                   data-fgColor="#2abfcc" value="{{ $sales }}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                            <h6 class="text-muted m-t-10">Business Sales Ads</h6>
                                        </div>
                                    </div><!-- end col-->

                                    <div class="col-lg-4 col-sm-6 text-center">
                                        <div class="p-t-10">
                                            <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                                   data-fgColor="#2abfcc" value="{{ $partnerships }}" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                            <h6 class="text-muted m-t-10">Business Partnership Ads</h6>
                                        </div>
                                    </div><!-- end col-->

                                </div> <!-- end row -->

                                <hr/>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <h4>Company Information</h4>

                                        <div class=" p-t-10">
                                            <h5 class="text-custom m-b-5">Company Name</h5>
                                            <p class="m-b-0">{{ $user->company->name }}</p>
                                        </div>

                                        <hr/>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Company Description</h5>
                                            <p class="text-muted font-13">{{ $user->company->description }}
                                            </p>
                                        </div>
                                        <hr/>
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Company Address</h5>
                                            <p class="text-muted font-13">Country : {{ $user->company->country }}
                                            <hr>
                                            <p class="text-muted font-13">Address : {{ $user->company->address }}
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Representative Phone Number</h5>
                                            <p class="text-muted font-13">{{ $user->company->rep_phone }}
                                        </div>
                                        <hr>
                                        <div class="">
                                            <h5 class="text-custom m-b-5">Representative Name</h5>
                                            <p class="text-muted font-13">{{ $user->company->rep_name }}
                                        </div>

                                        <hr>

                                        <div class="">
                                            <h5 class="text-custom m-b-5">Website URL</h5>
                                            <p class="text-muted font-13">{{ $user->company->website_url }}
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                            </div>
                            <!-- end col -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->

            <div class="row">

                {{--{{ $user }}--}}

                {{--    <div class="col-md-3">--}}
                {{--        <!-- Stats -->--}}
                {{--        <div class="box box-success">--}}
                {{--            <div class="box-body box-profile">--}}
                {{--                <div class="text-center">--}}
                {{--                    <img height="230" width="230"  src="{{ asset(Auth::user()->avatar) }}">--}}

                {{--                </div>--}}

                {{--            </div>--}}
                {{--            <!-- /.box-body -->--}}
                {{--        </div>--}}

                {{--        <!-- Profile -->--}}
                {{--        <div class="box box-success">--}}
                {{--            <div class="box-header with-border">--}}
                {{--                <h3 class="box-title">Account Information</h3>--}}
                {{--            </div>--}}
                {{--            <div class="box-body box-profile">--}}
                {{--                <ul class="list-group list-group-unbordered">--}}
                {{--                    <li class="list-group-item" style="border-top: 0;">--}}
                {{--                        <b>Username</b> <a class="pull-right">{{ optional($user)->username }}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="list-group-item">--}}
                {{--                        <b>Email</b> <a class="pull-right">{{ $user->email }}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="list-group-item">--}}
                {{--                        <b>Phone</b> <a class="pull-right">{{ optional($user)->phone }}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="list-group-item">--}}
                {{--                        <b>Role</b> <a class="pull-right"> {{ optional($user)->role() }}</a>--}}
                {{--                    </li>--}}
                {{--                    --}}{{--<li class="list-group-item">--}}
                {{--                        --}}{{--<b>Account Number</b> <a class="pull-right"> {{ optional($account)->account_number }}</a>--}}
                {{--                    --}}{{--</li>--}}
                {{--                </ul>--}}
                {{--            </div>--}}
                {{--            <!-- /.box-body -->--}}
                {{--        </div>--}}

                {{--        <!-- Address Box -->--}}
                {{--        <div class="box box-success">--}}
                {{--            <div class="box-header with-border">--}}
                {{--                <h3 class="box-title">Address</h3>--}}
                {{--            </div>--}}
                {{--            <!-- /.box-header -->--}}
                {{--            <div class="box-body">--}}
                {{--                <p class="text-muted">--}}
                {{--                    {{ optional($user->profile)->residential_address }}--}}
                {{--                </p>--}}
                {{--            </div>--}}
                {{--            <!-- /.box-body -->--}}
                {{--        </div>--}}
                {{--        <!-- /.box -->--}}

                {{--        <!-- Edit -->--}}
                {{--        <div>--}}
                {{--            <a href="{{ url("/customer/profile/update_profile") }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>--}}
                {{--            <!-- /.box-body -->--}}
                {{--        </div>--}}
                {{--    </div>--}}
                {{--    <!-- /.col -->--}}

                {{--    <div class="col-md-9">--}}
                {{--        <div class="row">--}}
                {{--            <div class="col-md-4 col-sm-8 col-xs-12">--}}
                {{--                <div class="info-box">--}}
                {{--                    <span class="info-box-icon bg-green"><i class="feather icon-type"></i></span>--}}

                {{--                    <div class="info-box-content">--}}
                {{--                        <span class="info-box-text">Account Type</span>--}}
                {{--                        <span class="info-box-number">{{ $user->role() }}</span>--}}
                {{--                    </div>--}}
                {{--                    <!-- /.info-box-content -->--}}
                {{--                </div>--}}
                {{--                <!-- /.info-box -->--}}
                {{--            </div>--}}
                {{--            <!-- /.col -->--}}
                {{--            <div class="col-md-4 col-sm-8 col-xs-12">--}}
                {{--                <div class="info-box">--}}
                {{--                    <span class="info-box-icon bg-yellow"><i class="feather icon-star-on"></i></span>--}}

                {{--                    <div class="info-box-content">--}}
                {{--                        <span class="info-box-text">Account Status</span>--}}
                {{--                        <span class="info-box-number">{{ $user->status }}</span>--}}
                {{--                    </div>--}}
                {{--                    <!-- /.info-box-content -->--}}
                {{--                </div>--}}
                {{--                <!-- /.info-box -->--}}
                {{--            </div>--}}
                {{--            <!-- /.col -->--}}
                {{--            <div class="col-md-4 col-sm-8 col-xs-12">--}}
                {{--                <div class="info-box">--}}
                {{--                    <span class="info-box-icon bg-red"><i class="feather icon-message-square"></i></span>--}}

                {{--                    <div class="info-box-content">--}}
                {{--                        <span class="info-box-text">Notifications</span><br>--}}
                {{--                        <span class="info-box-number">0</span>--}}
                {{--                    </div>--}}
                {{--                    <!-- /.info-box-content -->--}}
                {{--                </div>--}}
                {{--                <!-- /.info-box -->--}}
                {{--            </div>--}}
                {{--            <!-- /.col -->--}}
                {{--        </div>--}}

                {{--        <div class="row">--}}
                {{--            <div class="col-sm-12">--}}
                {{--                <div class="nav-tabs-custom">--}}
                {{--                    <div class="tab-content">--}}
                {{--                        <div class="tab-pane tab-margin active" id="profile">--}}
                {{--                            <div class="box-body box-profile">--}}
                {{--                                <ul class="list-group list-group-unbordered">--}}
                {{--                                    <li class="list-group-item" style="border-top: 0;">--}}
                {{--                                        <b>First Name</b> <a class="pull-right">{{ optional($user->profile)->first_name }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="list-group-item" >--}}
                {{--                                        <b>Last Name</b> <a class="pull-right">{{ optional($user->profile)->last_name }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>Nationality</b> <a class="pull-right">{{ optional($user->profile)->nationality }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    --}}{{--<li class="list-group-item">--}}
                {{--                                    --}}{{--<b>State Of Origin</b> <a class="pull-right">{{ optional($account->user->profile)->state_of_origin }}</a>--}}
                {{--                                    --}}{{--</li>--}}
                {{--                                    --}}{{--<li class="list-group-item">--}}
                {{--                                    --}}{{--<b>Local Govt. Of Origin</b> <a class="pull-right"> {{ optional($account->user->profile)->lga_of_origin }}</a>--}}
                {{--                                    --}}{{--</li>--}}
                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>Country Of Residence</b> <a class="pull-right"> {{ optional($user->profile)->country  }}</a>--}}
                {{--                                    </li>--}}

                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>State Of Origin</b> <a class="pull-right"> {{ optional($user->profile)->state  }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>Residing Town/City</b> <a class="pull-right"> {{ optional($user->profile)->city  }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>Date of Birth</b> <a class="pull-right"> {{ optional($user->profile)->date_of_birth  }}</a>--}}
                {{--                                    </li>--}}
                {{--                                    <li class="list-group-item">--}}
                {{--                                        <b>Sex </b> <a class="pull-right"> {{ optional($user->profile)->sex  }}</a>--}}
                {{--                                    </li>--}}

                {{--                                    --}}{{--<li class="list-group-item">--}}
                {{--                                        --}}{{--<b>Means Of Identification</b> <a class="pull-right"> {{ optional($user->profile)->identification()  }}</a>--}}
                {{--                                    --}}{{--</li>--}}
                {{--                                    --}}{{--<li class="list-group-item">--}}
                {{--                                        --}}{{--<b>Identification Number</b> <a class="pull-right"> {{ optional($user->profile)->identification_number  }}</a>--}}
                {{--                                    --}}{{--</li>--}}
                {{--                                </ul>--}}
                {{--                            </div>--}}

                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--        <!-- /.box -->--}}
                {{--    </div>--}}
            </div>
        </div>
    </div>
    @endsection

@section('js')
            <!--[if IE]>
    <script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="/plugins/jquery-knob/jquery.knob.js"></script>
@stop

@section('css')

@stop
