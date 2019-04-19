@extends('layouts.backend')

@section('content')


    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ isset($invest->brand_name) ? $invest->brand_name : 'invest' }}</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('invests.invest.edit', $invest->id ) }}" class="btn btn-primary" title="Edit invest">

                                    <span class="fa fa-edit" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('invests.invest.index') }}" class="btn btn-primary" title="Show All invest">
                                    <span class="fa fa-list" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="property-detail-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <img class="img-responsive" style="max-width: 100%" src="{{ $invest->image }}" alt="slide-image" />

                        <div class="m-t-30">
                            <h3>{{ $invest->brand_name }}</h3>
                            <hr>

                            <h4 class="header-title m-t-0 m-b-20">Profile Summary</h4>

                            <p class="m-t-20" style="margin-bottom: 50px">
                                {!! $invest->profile_summary !!}
                            </p>

                            <hr class="">

                            <h4 class="m-t-30 m-b-20">Business Type(s)</h4>

                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled proprerty-features">
                                        {{--                                      {!! $invest->business_type !!}--}}
                                        @foreach($invest->business_type as $key)
                                            <li>
                                                <i class="mdi mdi-check-circle-outline text-success m-r-5"></i>
                                                {{ $key }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div> <!--- end col -->

                            </div> <!-- end row -->

                        </div> <!-- end m-t-30 -->

                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="text-left">
                                <h4 class="header-title m-t-0 m-b-20">{{ optional($invest->user)->company->name }}</h4>
                            </div>
                            <div class="member-card">
                                <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                    <img src="{{ optional($invest->user)->avatar }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="Featured Agent"></i>
                                </div>

                                <div class="">
                                    <h4 class="m-b-5">{{ optional($invest->user)->name }}</h4>
                                </div>

                                <div class="m-t-20">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h4>84</h4>
                                            <p>Listed invests</p>
                                        </li>

                                        <li class="list-inline-item m-l-15">
                                            <h4>58</h4>
                                            <p>invest Properties</p>
                                        </li>
                                        <li class="list-inline-item m-l-15">
                                            <h4>58</h4>
                                            <p>invest Properties</p>
                                        </li>
                                    </ul>
                                </div>

                                <button type="button" class="btn btn-brown btn-rounded waves-effect m-b-10 waves-light">View Profile</button>

                            </div> <!-- end membar card -->
                        </div> <!-- end card-box -->

                        <div class="card-box">
                            <div class="table-responsive">
                                <table class="table table-bordered m-b-0">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Maximum Capital:</th>
                                        <td>N{{ $invest->maximum_capital }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Featured :</th>
                                        <td>{{ $invest->featured ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status :</th>
                                        <td>{{ $invest->status ? 'Active' : 'Not Active' }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end card-box -->

                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>

            <div class="row">


                <div class="row">
                    <div class="col-md-12 col-xl-12">

                        <form method="POST" action="{!! route('invests.invest.destroy', $invest->id) !!}" accept-charset="UTF-8">
                            <input name="_method" value="DELETE" type="hidden">
                            {{ csrf_field() }}
                            <div class="btn-group btn-group-sm" role="group">

                                <a href="{{ route('invests.invest.create') }}" class="btn btn-success" title="Create New invest">
                                    <span class="fa fa-plus" aria-hidden="true"></span>
                                </a>
                                <button type="submit" class="btn btn-danger" title="Delete invest" onclick="return confirm(&quot;Delete Invest??&quot;)">
                                    <span class="fa fa-trash" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection