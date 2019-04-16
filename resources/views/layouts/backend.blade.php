<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Bootstrap 4 Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/admin/assets/css/style.css" />

    <link rel="stylesheet" href="/plugins/switchery/switchery.min.css">


    <script src="/admin/assets/js/modernizr.min.js"></script>

    @yield('css')

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
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
                        <li class="d-none d-lg-inline-block">
                            <a href="#" class="menu-item">New</a>
                        </li>
                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="dropdown-toggle menu-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" class="dropdown-item">German</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">French</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Italian</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item">Spanish</a></li>
                            </ul>
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

                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-email"></i>
                                <span class="badge up badge-danger badge-pill">8</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Messages</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="/admin/assets/images/users/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Patricia Beach</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="/admin/assets/images/users/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Connie Lucas</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="/admin/assets/images/users/avatar-4.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Margaret Becker</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>

                        <li class="dropdown user-box">
                            <a href="#" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, John</h5>
                                </li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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

        @yield('content')

        <footer class="footer">
            2016 - 2019 © Zircos <span class="d-none d-sm-inline-block">theme by Coderthemes.</span>
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

<!-- jQuery  -->
<script src="/admin/assets/js/jquery.min.js"></script>
<script src="/admin/assets/js/bootstrap.bundle.min.js"></script>
<script src="/admin/assets/js/detect.js"></script>
<script src="/admin/assets/js/fastclick.js"></script>
<script src="/admin/assets/js/jquery.blockUI.js"></script>
<script src="/admin/assets/js/waves.js"></script>
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<script src="/admin/assets/js/jquery.scrollTo.min.js"></script>

<script src="plugins/switchery/switchery.min.js"></script>

{{--<!-- Counter js  -->--}}
{{--<script src="../plugins/waypoints/jquery.waypoints.min.js"></script>--}}
{{--<script src="../plugins/counterup/jquery.counterup.min.js"></script>--}}

{{--<!--Morris Chart-->--}}
<script src="/plugins/morris/morris.min.js"></script>
{{--<script src="../plugins/raphael/raphael-min.js"></script>--}}

<!-- Dashboard init -->
<script src="/admin/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>

@yield('js')

</body>
</html>