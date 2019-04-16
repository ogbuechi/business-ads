@extends('layouts.backend')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Publishers </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="#">Zircos</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Extras </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Members
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-4">
                    <a href="#custom-modal" class="btn btn-danger btn-bordered waves-effect waves-light m-b-20" data-animation="fadein" data-plugin="custommodal"
                       data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add Publisher</a>
                </div><!-- end col -->
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                <h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#" class="dropdown-item">Edit</a></li>
                                <li><a href="#" class="dropdown-item">Delete</a></li>
                                <li><a href="#" class="dropdown-item">Block</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="member-card">
                            <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail" alt="profile-image">
                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                            </div>

                            <div>
                                <h4 class="m-b-5">Mark A. McKnight</h4>
                                <p class="text-muted">@webdesigner <span> | </span> <span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted font-13">
                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                            </p>

                            <button type="button" class="btn btn-info btn-rounded waves-effect m-t-10 waves-light">View Profile</button>

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

                    </div>

                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
@stop

@section('extra')
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Add Publisher</h4>
        <div class="custom-modal-text text-left">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" placeholder="Enter position">
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" placeholder="Enter company">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
            </form>
        </div>
    </div>
@stop

@section('js')
    <!-- Modal-Effect -->
    <script src="/plugins/custombox/js/custombox.min.js"></script>
    <script src="/plugins/custombox/js/legacy.min.js"></script>
@stop

@section('css')
    <!-- Modal -->
    <link href="/plugins/custombox/css/custombox.min.css" rel="stylesheet">
@stop