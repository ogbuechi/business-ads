@extends('layouts.master')

@section('content')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <h2 class="dashbord-title">My B2B Invest Post Ads <span class="float-right"><a class="tg-btn" href="{{ route('invests.invest.create') }}">
                    <i class="lni-pencil-alt"></i> Post New Invest Ad
                </a></span> </h2>
                </div>
                <div class="dashboard-wrapper">
                    @if(count($invests) == 0)
                        <div class="panel-body text-center">
                            <p>You have not added any B2B Invest Ads yet</p>
                            <a href="{{ route('invests.invest.create') }}">Create Ad</a>
                        </div>
                    @else

                    <nav class="nav-table">
                        <ul>
                            <li class="active"><a href="#">All Ads (42)</a></li>
                            <li><a href="#">Published (88)</a></li>
                            <li><a href="#">Featured (12)</a></li>
                            <li><a href="#">Sold (02)</a></li>
                            <li><a href="#">Active (42)</a></li>
                            <li><a href="#">Expired (01)</a></li>
                        </ul>
                    </nav>
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
                        @endif
                </div>
            </div>
        </div>
    </div>

@endsection


