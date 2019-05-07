<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Place To Place Your Business">
    <meta name="author" content="gloseed">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">
    <!-- App title -->
    <title>GloSeed - Business Ads</title>

    <link href="/plugins/custombox/css/custombox.min.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Summernote css -->
    <link href="/plugins/summernote/summernote-bs4.css" rel="stylesheet" />

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style.css" />

    <link rel="stylesheet" href="/plugins/switchery/switchery.min.css">

    <link href="/plugins/sweet-alert2/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">


    <script src="/admin/assets/js/modernizr.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .dropzone {
            border:2px dashed #999999;
            border-radius: 10px;
        }
        .dropzone .dz-default.dz-message {
            height: 171px;
            background-size: 132px 132px;
            margin-top: -101.5px;
            background-position-x:center;

        }
      textarea {
            background: #ebebeb;
            border-radius: 2px;
            padding: 14px 12px 8px;
            box-sizing: border-box;
            border: solid 1px #ebebeb;
            width: 100%;
            /*height: 134px;*/
            font-size: 14px;
            /*resize: none;*/
            display: block;
        }
        .property-card.property-horizontal .property-content .listingInfo {
            padding-bottom: 50px;
        }
        .property-card.property-horizontal .property-content {
            width: 100%;
            height: 100%;
        }
        @media (max-width: 419px){
            .page-title-box .breadcrumb {
                display: flex;
            }
            .page-title-box .page-title {
                margin-bottom: 15px;
            }
            .property-card.property-horizontal .property-content .listingInfo {
                padding-bottom: 50px;
            }
            .property-card.property-horizontal .property-content {
                width: 100%;
                 height: 100%;
            }
        }
        .dropzone .dz-default.dz-message span {
            display: block;
            margin-top: 145px;
            font-size: 20px;
            text-align: center;
        }
        .timeline-desk h4 {
            font-size: 26px;
            font-weight: 600;
        }
    </style>


    @yield('css')

</head>


<body class="fixed-left">

<div id="wrapper">


        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ route('admin.home') }}" class="logo"><span>Glo<span>Seed</span></span><i class="mdi mdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <div class="clearfix">
                        <!-- Navbar-left -->
                        <ul class="nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="d-none d-sm-inline-block">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-right">
                            <li>
                                <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up badge-success badge-pill">4</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5>Notifications</h5>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-info">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Signup</span>
                                                <span class="time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                                <i class="mdi mdi-comment"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">New Message received</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-warning">
                                                <i class="mdi mdi-settings"></i>
                                            </div>
                                            <div class="user-desc">
                                                <span class="name">Settings</span>
                                                <span class="time">1 day ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="all-msgs text-center">
                                        <p class="m-0"><a href="#">See all Notification</a></p>
                                    </li>
                                </ul>
                            </li>



                            {{--                        <li>--}}
                            {{--                            <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">--}}
                            {{--                                <i class="mdi mdi-settings"></i>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}

                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ Auth::user()->avatar }}" alt="user-img" class="rounded-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Hi, {{ Auth::user()->name }}</h5>
                                    </li>
                                    <li><a href="{{ route('profiles.profile.myprofile') }}" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->
                    </div>

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

    @include('partials.admin.sidebar')
    <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div id="ap">
            @yield('content')
            </div>
            <footer class="footer">
                2016 - 2019 © Gloseed <span class="d-none d-sm-inline-block">Business Ads</span>
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    @yield('extra')



    <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="mdi mdi-close-circle-outline"></i>
            </a>
            <h4 class="">Settings</h4>
            <div class="setting-list nicescroll">
                <div class="row m-t-20">
                    <div class="col-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Right-bar -->



    </div>


<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Post Ads</h4>
    <div class="custom-modal-text">
        <div class="row">

            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="card-box widget-box-one">
                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Active Business Investors Ads">Business Investors Ads</p>
{{--                        <h2>{{ $count['invest'] }} <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>--}}
                        <i class="fa fa-plus fa-2x"></i><br>
                            <p class="text-muted m-0"><b><a href="{{ route('invests.invest.create') }}">Post Ad</a> </b> </p>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="card-box widget-box-one">
                    <i class="mdi mdi-account-convert widget-one-icon"></i>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Your Active Open Partnership Ads">Open Partnership Ads</p>
                        <i class="fa fa-plus fa-2x"></i><br>
                            <p class="text-muted m-0"><b><a href="{{ route('partnerships.partnership.create') }}">Post Ad</a> </b> </p>

                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="card-box widget-box-one">
                    <i class="mdi mdi-layers widget-one-icon"></i>
                    <div class="wigdet-one-content">
                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Your Active Sales Ads"> Business Sales Ads</p>
                        <i class="fa fa-plus fa-2x"></i><br>
                        <p class="text-muted m-0"><b><a href="{{ route('sales.sale.create') }}">Post Ad</a> </b> </p>
                    </div>
                </div>
            </div><!-- end col -->


        </div>
    </div>
</div>

<!-- jQuery  -->
<script src="/admin/assets/js/jquery.min.js"></script>



<script src="/admin/assets/js/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/detect.js"></script>
<script src="/admin/assets/js/fastclick.js"></script>
<script src="/admin/assets/js/jquery.blockUI.js"></script>
<script src="/admin/assets/js/waves.js"></script>
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<script src="/admin/assets/js/jquery.scrollTo.min.js"></script>

<script src="/plugins/switchery/switchery.min.js"></script>

<script src="/plugins/custombox/js/custombox.min.js"></script>
<script src="/plugins/custombox/js/legacy.min.js"></script>

{{--<!-- Counter js  -->--}}
{{--<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>--}}
{{--<script src="../plugins/counterup/jquery.counterup.min.js"></script>--}}

{{--<!--Morris Chart-->--}}
<script src="/plugins/morris/morris.min.js"></script>
<script src="/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="/admin/assets/pages/jquery.dashboard.js"></script>


<!--Summernote js-->
<script src="/plugins/summernote/summernote-bs4.js"></script>

<script>

    jQuery(document).ready(function(){

        $('.textarea').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">
    Dropzone.options.fileupload = {
        accept: function (file, done) {
            if (file.type != "application/vnd.ms-excel" && file.type != "image/jpeg, image/png, image/jpg") {
                done("Error! Files of this type are not accepted");
            } else {
                done();
            }
        }
    }

    Dropzone.options.fileupload = {
        acceptedFiles: "image/jpeg, image/png, image/jpg"
    }

    if (typeof Dropzone != 'undefined') {
        Dropzone.autoDiscover = false;
    }

    ;
    (function ($, window, undefined) {
        "use strict";

        $(document).ready(function () {
            // Dropzone Example
            if (typeof Dropzone != 'undefined') {
                if ($("#fileupload").length) {
                    var dz = new Dropzone("#fileupload"),
                        dze_info = $("#dze_info"),
                        status = {
                            uploaded: 0,
                            errors: 0
                        };
                    var $f = $('<tr><td class="name"></td><td class="size"></td><td class="type"></td><td class="status"></td></tr>');
                    dz.on("success", function (file, responseText) {

                        var _$f = $f.clone();

                        _$f.addClass('success');

                        _$f.find('.name').html(file.name);
                        if (file.size < 1024) {
                            _$f.find('.size').html(parseInt(file.size) + ' KB');
                        } else {
                            _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
                        }
                        _$f.find('.type').html(file.type);
                        _$f.find('.status').html('Uploaded <i class="entypo-check"></i>');

                        dze_info.find('tbody').append(_$f);

                        status.uploaded++;

                        dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

                        toastr.success('Your File Uploaded Successfully!!', 'Success Alert', {
                            timeOut: 50000000
                        });

                    })
                        .on('error', function (file) {
                            var _$f = $f.clone();

                            dze_info.removeClass('hidden');

                            _$f.addClass('danger');

                            _$f.find('.name').html(file.name);
                            _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
                            _$f.find('.type').html(file.type);
                            _$f.find('.status').html('Uploaded <i class="entypo-cancel"></i>');

                            dze_info.find('tbody').append(_$f);

                            status.errors++;

                            dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

                            toastr.error('Your File Uploaded Not Successfully!!', 'Error Alert', {
                                timeOut: 5000
                            });
                        });
                }
            }
        });
    })(jQuery, window);
</script>




@yield('js')

<script src="/js/app.js"></script>


<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>

<script>
    $(document).ready(function () {
        $("#showPost").click(function () {
            $("#post").toggle("slow");
            $("#noAd").toggle("slow");
        });
    });
</script>



</body>
</html>