<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gloseed - Business Ads Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form  class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-26">
						Welcome
					</span>

                <div class="wrap-input100">
                    <input required autofocus value="{{ old('name') }}" class="input100 {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name">
                    <span class="focus-input100" data-placeholder="Username"></span>

                </div>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <input required autofocus value="{{ old('email') }}" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>

                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif


                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                    <span class="focus-input100" data-placeholder="Password"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Confirm password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100 " type="password" name="password_confirmation" required>
                    <span class="focus-input100" data-placeholder="Confirm Password"></span>
                </div>

                <div class="row {{ $errors->has('role_id') ? 'has-error' : '' }}">
                    <label for="account_id" class="col-md-4 col-form-label text-md-right">Role</label>
                    <div class="col-md-6">
                        <select class="form-control" id="role_id" name="role_id">
                            {{--<option value="" style="display: none;" disabled selected>Enter account here...</option>--}}
                            <option value="" style="display: none;" {{ old('role_id' ?: '') == '' ? 'selected' : '' }} disabled selected> Select Role</option>
                            @foreach ($roles as $key => $role)
                                <option value="{{ $key }}" {{ old('role_id') == $key ? 'selected' : '' }}>
                                    {{ $role }}
                                </option>
                            @endforeach
                        </select>

                        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>



                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>


                <div class="text-center p-t-115">
						<span class="txt1">
							Don you have an account?
						</span>

                    <a class="txt2" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main1.js"></script>

</body>
</html>