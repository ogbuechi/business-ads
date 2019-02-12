@extends('layouts.backend')

@section('content')
    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                            <span>Advanced Eli Health Record System for Medical Report </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
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

                            <div class="col-md-12 col-xl-4">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>Total Patients</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Impressions</h6>
                                                <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-eye bg-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>Total Nurses</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Impressions</h6>
                                                <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-eye bg-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 col-xl-4">
                                <div class="card comp-card">
                                    <div class="card-header">
                                        <h5>Total Doctors</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Impressions</h6>
                                                <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-eye bg-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>









                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection