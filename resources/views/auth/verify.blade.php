<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/zircos/layouts/default/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2019 12:50:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Business Ad">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon"  href="/admin/assets/images/favicon.ico">
    <!-- App title -->
    <title>Gloseed - Business Ads</title>

    <!-- App css -->
    <link rel="stylesheet" type="text/css"  href="/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"  href="/admin/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css"  href="/admin/assets/css/style.css" />

    <script src="/admin/assets/js/modernizr.min.js"></script>

</head>


<body class="bg-transparent">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page" style="max-width: 820px">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <div class="m-t-10 m-b-10">
                                <a href="#" class="text-success">
                                    <span style="font-size: 27px;">GloSeed Account Verification</span>
                                    {{--                                    <span><img src="/admin/assets/images/logo.png" alt="" height="36"></span>--}}
                                </a>
                            </div>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                                        <div class="card-body">
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                </div>
                                            @endif

                                            {{ __('Before proceeding, please check your email for a verification link.') }}
                                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

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

<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>

</body>

</html>