@extends('layouts.backend')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Inbox</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">Home</a>
                            </li>

                            <li class="breadcrumb-item active">
                                Inbox
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- End row -->


            <div class="row">
                <div class="col-12">
                    <div class="mails card-box">

                        <div class="table-box">
                            <div class="table-detail" style="width: 250px;">
                                <div class="p-20">
                                    <a href="{{ route('chat.index') }}" class="btn btn-danger btn-rounded btn-custom w-lg waves-effect waves-light">Inbox</a>

                                    <h5 class=" m-t-40 text-uppercase hidden-xxs">Chat</h5>

                                    <div class="chat-widget hidden-xxs">
                                        @foreach($users as $user)
                                            {{--                                                    {{ $message }}--}}
                                            <a href="{{ route('chat.inbox',$user->sender->id) }}">
                                                <div class="chat-item">
                                                    <div class="chat-item-img">
                                                        <img src="/admin/assets/images/users/avatar-1.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="chat-right-text">
                                                        <p class="chat-item-author">{{ $user->sender->name }}</p>
                                                        <p class="chat-item-text">{{ optional($user->sender->company)->name }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach

                                    </div>

                                </div>
                            </div>

                            <div class="table-detail mail-right" style="vertical-align: middle">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-bo -t-20">

                                            <chat :user="{{ $receiver }}"  v-bind:auth="{{ Auth::user() }}"></chat>
{{--                                            <example-component></example-component>--}}
                                        </div>

                                    </div>
                                </div>

                                <!-- End row -->

                            </div> <!-- table detail -->
                        </div>
                        <!-- end table box -->

                    </div> <!-- mails -->
                </div>
            </div>

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















