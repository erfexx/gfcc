<!DOCTYPE html>
<html lang="en">
<head>
    <title>GFCC Admin Site</title>
    <meta name='generator' content='CRUDBooster'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('login_css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login_css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('login_img/bg-01.jpg')}}');">
        <div class="wrap-login100">
            {{--@if ( Session::get('message') != '' )--}}
            {{--<div class='alert alert-warning'>--}}
            {{--{{ \Illuminate\Support\Facades\Session::get('message') }}--}}
            {{--</div>--}}
            {{--@endif--}}

            <form autocomplete='off' action="{{ route('postLogin') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <span class="login100-form-logo">
                    <img src="{{asset('login_img/logo.jpg')}}" class="" style="width: 70%;">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    WELCOME
                </span>

                {{--<div class="wrap-input100 validate-input" data-validate = "Enter Email">--}}
                {{--<input class="input100" type="text" name="username" placeholder="Username">--}}
                {{--<input autocomplete='off' type="text" class="input100" name='email' placeholder="Email"/>--}}
                {{--<span class="focus-input100" data-placeholder="&#xf207;"></span>--}}
                {{--</div>--}}

                <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                    {{--<input class="input100" type="text" name="username" placeholder="Username">--}}
                    <input autocomplete='off' type="text" class="input100" name='username' required placeholder="Username"/>
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <!-- <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div> -->

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        LOGIN
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a><br>
                    <a class="txt1" href="{{route('home')}}">
                        Back to Guest Site
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('login_vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('login_vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('login_vendor/daterangepicker/moment.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('login_js/main.js')}}"></script>

</body>
</html>