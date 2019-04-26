
<script src="/plugins/sweet-alert2/sweetalert2.min.js"></script>

@if(Session::has('success_message'))

        <script>
            !function ($) {
                "use strict";

                var SweetAlert = function () {
                };

                //examples
                SweetAlert.prototype.init = function () {

                    //Basic
                    // $('#sa-basic').on('click', function () {
                    setTimeout(function(){
                        swal(
                            {
                                title: 'Success!',
                                text: '{!! session('success_message') !!}',
                                type: 'success',
                                confirmButtonColor: '#4fa7f3'
                            }
                        )
                    }, 1000);

                    // });
                },
                    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
            }(window.jQuery),

//initializing
                function ($) {
                    "use strict";
                    $.SweetAlert.init()
                }(window.jQuery);
        </script>
@endif

{{--    <script src="/admin/assets/pages/jquery.sweet-alert.init.js"></script>--}}



