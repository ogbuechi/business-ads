@extends('layouts.backend')

@section('content')


<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">{{ isset($sale->name) ? $sale->name : 'Sale' }}</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('sales.sale.edit', $sale->id ) }}" class="btn btn-primary" title="Edit Sale">

                                <span class="fa fa-edit" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('sales.sale.index') }}" class="btn btn-primary" title="Show All Sale">
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
                    <img class="img-responsive" style="max-width: 100%" src="{{ $sale->image }}" alt="slide-image" />

                    <div class="m-t-30">
                        <h3>{{ $sale->name }}</h3>
                        <hr>

                        <h4 class="header-title m-t-0 m-b-20">Deal Summary</h4>

                        <p class="m-t-20" style="margin-bottom: 50px">
                            {!! $sale->summary !!}
                        </p>

                        <hr class="">
                        <h4 class="header-title m-t-0 m-b-20">Selling Conditions</h4>
                        {!! $sale->selling_conditions !!}
                        <hr class="">
                        <h4 class="header-title m-t-0 m-b-20">Selling Reasons</h4>
                        {!! $sale->selling_reasons !!}
                        <hr class="">
                        <h4 class="m-t-30 m-b-20">Business Type(s)</h4>

                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled proprerty-features">
{{--                                      {!! $sale->business_type !!}--}}
                                    @foreach($sale->business_type as $key)
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
                            <h4 class="header-title m-t-0 m-b-20">{{ optional($sale->user)->company->name }}</h4>
                        </div>
                        <div class="member-card">
                            <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                <img src="{{ optional($sale->user)->avatar }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                <i class="mdi mdi-star-circle member-star text-success" title="Featured Agent"></i>
                            </div>

                            <div class="">
                                <h4 class="m-b-5">{{ optional($sale->user)->name }}</h4>
                            </div>

                            <div class="m-t-20">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h4>84</h4>
                                        <p>Listed Sales</p>
                                    </li>

                                    <li class="list-inline-item m-l-15">
                                        <h4>58</h4>
                                        <p>Sale Properties</p>
                                    </li>
                                    <li class="list-inline-item m-l-15">
                                        <h4>58</h4>
                                        <p>Sale Properties</p>
                                    </li>
                                </ul>
                            </div>

{{--                            <button type="button" class="btn btn-brown btn-rounded waves-effect m-b-10 waves-light">View Profile</button>--}}

                            <a href="{{ route('user.show',$sale->user->id) }}" class="btn btn-brown btn-rounded waves-effect m-b-10 waves-light">View Profile</a>

                        </div> <!-- end membar card -->
                    </div> <!-- end card-box -->

                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <tbody>
                                <tr>
                                    <th scope="row">Deal Value:</th>
                                    <td>N{{ $sale->value }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">ShareHolders: </th>
                                    <td><span class="label label-danger">{{ $sale->shareholders }}</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Employees:</th>
                                    <td>{{ $sale->employees }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sale Authorization:</th>
                                    <td>{{ $sale->sales_authorization }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Listed ?:</th>
                                    <td>{{ $sale->listed }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card-box -->

                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>

{{--        <div class="row">--}}


{{--                    <div class="row">--}}
{{--                        <div class="col-md-12 col-xl-12">--}}

{{--                            <form method="POST" action="{!! route('sales.sale.destroy', $sale->id) !!}" accept-charset="UTF-8">--}}
{{--                                <input name="_method" value="DELETE" type="hidden">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                <div class="btn-group btn-group-sm" role="group">--}}

{{--                                    <a href="{{ route('sales.sale.create') }}" class="btn btn-success" title="Create New Sale">--}}
{{--                                        <span class="fa fa-plus" aria-hidden="true"></span>--}}
{{--                                    </a>--}}
{{--                                    <button type="submit" class="btn btn-danger" title="Delete Sale" onclick="return confirm(&quot;Delete Sale??&quot;)">--}}
{{--                                        <span class="fa fa-trash" aria-hidden="true"></span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}


{{--                        </div>--}}
{{--                    </div>--}}

{{--        </div>--}}



        <div class="row">
            <div class="col-sm-12">
                @include('partials.admin.message')
                <div class="timeline timeline-left">
                    <article class="timeline-item alt">
                        <div class="text-left">
                            <div class="time-show first">
                                <a href="#" class="btn btn-danger w-lg">Available Bids </a>
                                <button type="button" id="showBid" class="pull-right btn btn-success w-lg">Bid On This Project </button>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item" style="display: none" id="bid">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                    <form method="POST" action="{{ route('sale_bids.sale_bid.store') }}">
                                        {{ csrf_field() }}
                                        <input value="{{ $sale->id }}" type="hidden" name="sale_id">
                                        <input value="{{ Auth::user()->id }}" type="hidden" name="user_id">
                                        <div class="input-group m-t-10">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₦</span>
                                            </div>
                                            <input type="number" required id="amount" name="bid" class="form-control" placeholder="..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>

                                        <div class="input-group m-t-10">
                                            <input type="text" required id="reason" name="reason" class="form-control" placeholder="Reason">
                                            <span class="input-group-append">
                                                            <button type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                    @if(count($bids) == 0)
                        <article class="timeline-item" style="" id="bid">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                            <div class="panel-body text-center">
                                <p class="h3">No Bids Available Yet!</p>
                                @if($sale->user_id != Auth::user()->id)
                                <p class="m-t-5">Be the first to place a bid</p>
                                    @endif
                            </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        </div>
                    @else
                    @foreach($bids as $bid)
                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                    <h4 class="text-success">₦{{ $bid->bid }}</h4>
                                    <p class="timeline-date text-success"><small>{{ $bid->created_at->diffForHumans() }}</small></p>
                                    <p>{{ $bid->reason }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @endif
{{--                    <article class="timeline-item ">--}}
{{--                        <div class="timeline-desk">--}}
{{--                            <div class="panel">--}}
{{--                                <div class="timeline-box">--}}
{{--                                    <span class="arrow"></span>--}}
{{--                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>--}}
{{--                                    <h4 class="text-success">2 hours ago</h4>--}}
{{--                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>--}}
{{--                                    <p>consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="timeline-item">--}}
{{--                        <div class="timeline-desk">--}}
{{--                            <div class="panel">--}}
{{--                                <div class="timeline-box">--}}
{{--                                    <span class="arrow"></span>--}}
{{--                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>--}}
{{--                                    <h4 class="text-primary">10 hours ago</h4>--}}
{{--                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>--}}
{{--                                    <p>3 new photo Uploaded on facebook fan page</p>--}}
{{--                                    <div class="album">--}}
{{--                                        <a href="#">--}}
{{--                                            <img alt="" src="assets/images/small/img-1.jpg">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img alt="" src="assets/images/small/img-2.jpg">--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <img alt="" src="assets/images/small/img-3.jpg">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="timeline-item">--}}
{{--                        <div class="timeline-desk">--}}
{{--                            <div class="panel">--}}
{{--                                <div class="timeline-box">--}}
{{--                                    <span class="arrow"></span>--}}
{{--                                    <span class="timeline-icon bg-purple"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>--}}
{{--                                    <h4 class="text-purple">14 hours ago</h4>--}}
{{--                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>--}}
{{--                                    <p>Outdoor visit at California State Route 85 with John Boltana &--}}
{{--                                        Harry Piterson regarding to setup a new show room.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
{{--                    <article class="timeline-item">--}}
{{--                        <div class="timeline-desk">--}}
{{--                            <div class="panel">--}}
{{--                                <div class="timeline-box">--}}
{{--                                    <span class="arrow"></span>--}}
{{--                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>--}}
{{--                                    <h4 class="text-muted">19 hours ago</h4>--}}
{{--                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>--}}
{{--                                    <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>--}}
{{--                                        Lorem ipsum dolor sit amet consiquest dio</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}

                </div>
            </div>
        </div>
        <!-- end row -->


</div>
</div>

@endsection

@section('js')
    <script src="/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#showBid").click(function () {
                $("#bid").toggle("slow");
            });
            // $("#showExtra").click(function(){
            //     $("#extra").toggle("slow");
            // });
        });
    </script>
    @include('partials.sweetAlert')
@stop

