@extends('layouts.master')

@section('content')

    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">{{ count($ads) }} Search Result(s) Found</h2>
                        <div class="search-bar">
                            <div class="search-inner">
                                <form action="/search" method="get" class="search-form search-box">
                                    <div class="form-group inputwithicon" >
                                        <i class="lni-menu"></i>
                                        <input type="text" name="keyword" value="{{ $result }}" class="form-control" placeholder="Search For Business">
                                        <button type="submit" class="btn btn-search"><i class="lni-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home /</a></li>
                            <li class="current">{{ count($ads) }} Search Result(s) Found</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="featured section-padding">
        <div class="container">

            <div class="row">
                @if(count($ads) < 1)
                    <div class="col-md-12">
                        <div class="featured-bo mx-ato text-cente">
                            <img style="width: 100%" src="{{ asset('images/no_results_found.png') }}" class="img-responsiv">
                        </div>
                    @endif
                @foreach($ads as $item)
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                        <div class="featured-box">
                            <figure>
                                <div class="icon">
                                    <i class="lni-heart"></i>
                                </div>
                                <a href="{{ $item['link'] }}"><img class="img-fluid" src="{{ $item['image'] }}" alt=""></a>
                            </figure>
                            <div class="feature-content">
                                <div class="product">
                                    <a href="#"><i class="lni-folder"></i> {{ $item['type'] }}</a>
                                </div>
                                <h4><a href="{{ $item['link'] }}">

                                        {{ $item['name'] }}
                                    </a></h4>
                                <span>Posted : {{ $item->created_at->diffForHumans() }}</span>
                                <p>{{ $item['short_desc'] }}</p>
                                <div class="listing-bottom">
                                    <h3 class="price float-left">{{ $item['amount'] }}</h3>
                                    <a href="#" class="btn-verified float-right"><i class="lni-check-box"></i> Verified Ad</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@stop





