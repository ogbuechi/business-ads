@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Chats</h4>
                        <ol class="breadcrumb p-0 m-0">

                            <li class="breadcrumb-item">
                                <a href="#">Extras </a>
                            </li>
                            <li class="breadcrumb-item active">
                                Recent Chats
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="text-center card-box">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 mx-auto d-block">
                                            <img src="{{ asset($user->avatar) }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>

                                        <div class="">
                                            <h4 class="m-b-5">{{ $user->name }}</h4>
                                            <p class="text-muted mb-2">{{ $user->email }}</p>
                                        </div>

                                        <button type="button" class="btn btn-danger btn-sm w-sm waves-effect m-t-10 waves-light">Message</button>

                                        {{--                                                    <p class="text-muted font-13 m-t-20">--}}
                                        {{--                                                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.--}}
                                        {{--                                                    </p>--}}

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{ $user->name }}</span></p>

                                            {{--                                                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{ $user->profile->phone }}</span></p>--}}

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $user->email }}</span></p>

                                            {{--                                                        <p class="text-muted font-13"><strong>Address :</strong> <span class="m-l-15">{{ $user->profile->address }}</span></p>--}}
                                        </div>

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

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->

                            <div class="col-xl-9 col-md-8">
                                <h4>Recent Chats</h4>

                                <div class="mails card-box">
                                    <div class="table-box">
                                        <div class="table-detail">
                                            <div class="chat-widget">
                                                @if(count($messages) < 1)
                                                    <div>
                                                        <div class="col-xl-12 text-center">
                                                            <h4>No Recent Chat </h4>
                                                        </div>
                                                    </div>
                                                    @else

                                                @foreach($messages as $message)
{{--                                                    {{ $message }}--}}
                                                <a href="{{ route('chat.inbox',$message->sender->id) }}">
                                                    <div class="chat-item">
                                                        <div class="chat-item-img"><img src="{{ asset($message->sender->avatar) }}" class="rounded-circle" alt=""></div>
                                                        <div class="chat-right-text">
                                                            <p class="chat-item-author">{{ $message->sender->name }}</p>
                                                            <p class="chat-item-text">{{ optional($message->sender->company)->name }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                    @endforeach

                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->

            <div class="row">
            </div>
        </div>
    </div>
    @endsection

@section('js')
            <!--[if IE]>
    <script type="text/javascript" src="/plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="/plugins/jquery-knob/jquery.knob.js"></script>
@stop

@section('css')

@stop



