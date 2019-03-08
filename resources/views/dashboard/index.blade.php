@extends('layouts.master')

@section('content')
    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="dashbord-title">Dashboard</h2>
                </div>
                <div class="dashboard-wrapper">
                    <div class="dashboard-sections">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-write"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">Open Partnership</a></h2>
                                        <h3>5 Ads Posted</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox" style="background: #00bcd4;">
                                    <div class="icon"><i class="lni-add-files"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">B2B Invest Ads</a></h2>
                                        <h3>8 Ads Posted</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                <div class="dashboardbox">
                                    <div class="icon"><i class="lni-support"></i></div>
                                    <div class="contentbox">
                                        <h2><a href="#">B2B Sale Ads</a></h2>
                                        <h3>8 Ads Posted</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-responsive dashboardtable tablemyads">
                        <thead>
                        <tr>

                            <th>Brand Name</th>

                            <th>Category</th>
                            <th>Ad Status</th>
                            <th>Maximum Capital</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-category="active">

                            <td data-title="Title">
                                <h3>HP Laptop 6560b core i3 3nd generation</h3>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
                            <td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
                            <td data-title="Price">
                                <h3>139$</h3>
                            </td>
                            <td data-title="Action">
                                <div class="btns-actions">
                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                    <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                                    <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="active">

                            <td data-title="Title">
                                <h3>Jvc Haebr80b In-ear Sports Headphones</h3>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td data-title="Category">Electronics</td>
                            <td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
                            <td data-title="Price">
                                <h3>$189</h3>
                            </td>
                            <td data-title="Action">
                                <div class="btns-actions">
                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                    <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                                    <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr data-category="inactive">
                            <td data-title="Title">
                                <h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                            </td>
                            <td data-title="Category">Real Estate</td>
                            <td>
                                <span class="adstatus adstatusinactive">Inactive</span>
                            </td>
                            <td data-title="Price">
                                <h3>$69</h3>
                            </td>
                            <td data-title="Action">
                                <div class="btns-actions">
                                    <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
                                    <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
                                    <a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop