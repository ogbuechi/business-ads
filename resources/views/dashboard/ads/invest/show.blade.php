@extends('layouts.master')

@section('content')

    <div class="col-sm-12 col-md-8 col-lg-9">
        <div class="page-content">
            <div class="inner-box">
                <div class="dashboard-box">
                    <div class="ro">
                        <div class="col-xs-6">
                            <h4 class="">{{ $invest->brand_name }}</h4>
                        </div>
                        <div class="col-xs-6">
                            <ul class="nav">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('invests.invest.edit', $invest->id ) }}" title="Edit Invest">

                                        <span class="lni-pencil" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('invests.invest.index') }}" title="Show All Invest">
                                        <span class="lni-list" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="dashboard-wrapper">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">

                            <dl class="dl-horizontal">

                                <dt>Brand Name</dt>
                                <dd>{{ $invest->brand_name }}</dd>
                                <dt>Business Type</dt>
                                <dd>{{ $invest->business_type }}</dd>
                                <dt>Profile Summary</dt>
                                <dd>{{ $invest->profile_summary }}</dd>
                                <dt>Maximum Capital</dt>
                                <dd>{{ $invest->maximum_capital }}</dd>

                            </dl>
                            <form method="POST" action="{!! route('invests.invest.destroy', $invest->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-sm" role="group">

                                    <a href="{{ route('invests.invest.create') }}" class="btn btn-success" title="Create New Invest">
                                        <span class="lni-add-files" aria-hidden="true"></span>
                                    </a>
                                    <button type="submit" class="btn btn-danger" title="Delete Invest" onclick="return confirm(&quot;Delete Invest??&quot;)">
                                        <span class="lni-trash" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection