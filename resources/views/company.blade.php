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
    <link href="/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

    <script src="/admin/assets/js/modernizr.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        fieldset
        {
            border: 1px solid #ddd !important;
            margin: 0;
            xmin-width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            position: relative;
            border-radius:4px;
            /*background-color:#f5f5f5;*/
            padding-left:10px!important;
        }


        input[type=checkbox] {
            display: flex;
        }

        legend
        {
            font-size:14px;
            font-weight:bold;
            margin-bottom: 0px;
            /*width: 35%;*/
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }
    </style>


</head>


<body class="bg-transparent">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page" style="max-width: 700px">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <div class="m-t-10 m-b-10">
                                <a href="/" class="text-success">
                                    <span style="font-size: 27px">GloSeed Company Information</span>
                                </a>
                            </div>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content" style="padding: 30px 30px">
                            <div class="card-box">
                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form method="POST" action="{{ route('companies.company.update', $company->id) }}" id="edit_company_form" name="edit_company_form" accept-charset="UTF-8" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PUT">
                                    @include ('companies.form', [
                                    'company' => $company,
                                    ])

                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-10">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a></p>
                        </div>
                    </div>

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

<script src="/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>



    {{--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

        $( function() {
            $('input[type="checkbox"]').checkboxradio();
            // $( "input" ).checkboxradio();
        } );
    </script>


</body>

</html>

