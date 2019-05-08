@extends('layouts.master')
<!-- Start full screen top nav-->


@section('content')
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Business Investors Listings</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home /</a></li>
                            <li class="current">Business Investors Listings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-container section-padding">
        <div class="container">
            <div class="row">

                @include('partials.sidebar')


                @if(count($invests) < 1)
                    <div class="col-lg-9 col-md-12 col-xs-12 page-content">
                        <div class="adds-wrapper jumbotron text-center">
                            <div class="tab-content">
                                <h3>No Business Investors Ads Available</h3>
                            </div>
                        </div>
                    </div>
                    @else
                <div class="col-lg-9 col-md-12 col-xs-12 page-content">

                    <div class="product-filter">
                        <div class="short-name">
                            <span>Showing (1 - {{ count($invests) }} Investors Ads of {{ $count }} Investors Ads)</span>
                        </div>

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
                            </li>
                        </ul>
                    </div>


                    <div class="adds-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show">
                                <div class="row">
                                    @foreach($invests as $item)
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="featured-box">
                                            <figure>
                                                <div class="icon">
                                                    @if($item->featured)
                                                        <i class="">Featured</i>
                                                        @endif

                                                </div>
                                                <a href="#"><img class="img-fluid" src="{{ $item->image }}" alt=""></a>
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-user"></i>{{ $item->user->name }} </a>
                                                </div>
                                                <h4><a href="ads-details.html">{{ $item->name }}</a></h4>
                                                <span>Last Updated: {{ $item->created_at->diffForhumans() }}</span>
                                                <ul class="address">
                                                    @foreach($item->business_type as $key)
                                                        <li>
                                                            <i class="mdi mdi-check-circle-outline text-success m-r-5"></i>
                                                            {{ $key }}
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="listing-bottom">
                                                    <h5 class=" float-left">{{ $item->amount }}</h5>
{{--                                                    <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="list-view" class="tab-pane fade">
                                <div class="row">
                                    @foreach($invests as $item)
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="featured-box">
                                            <figure>
                                                <div class="icon">
                                                    @if($item->featured)
                                                        <i class="">Featured</i>
                                                    @endif
                                                </div>
                                                <a href="#"><img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->name }}"></a>
                                            </figure>
                                            <div class="feature-content">
                                                <div class="product">
                                                    <a href="#"><i class="lni-folder"></i> Apple</a>
                                                </div>
                                                <h4><a href="ads-details.html">{{ $item->name }}</a></h4>
                                                <span>Last Updated: {{ $item->created_at->diffForhumans() }}</span>
                                                <ul class="address">
                                                    @foreach($item->business_type as $key)
                                                        <li>
                                                            <i class="lni-package"></i>
                                                            {{ $key }}
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="listing-bottom">
                                                    <h3 class="price float-left">{{ $item->amount }}</h3>
{{--                                                    <a href="account-myads.html" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pagination-bar text-center">
                        {!! $invests->render() !!}
                    </div>

                </div>
                    @endif
            </div>
        </div>
        @include('partials.featured_ads', ['data' => $invests])
    </div>
@stop


