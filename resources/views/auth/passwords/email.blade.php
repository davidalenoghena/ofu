@extends('layouts.home')
  <head>
    <title>OFU - Reset Password</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('loging/images/icons/favicon.ico')}}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/vendor/bootstrap/css/bootstrap.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/fonts/iconic/css/material-design-iconic-font.min.css')}}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loging/vendor/animate/animate.css')}}" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/vendor/css-hamburgers/hamburgers.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/vendor/animsition/css/animsition.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/vendor/select2/select2.min.css')}}"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('loging/vendor/daterangepicker/daterangepicker.css')}}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loging/css/util.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('loging/css/main.css')}}" />
    <!--===============================================================================================-->
    </head>
  <body>
    <div class="limiter">
    <br />
      <br />
      <div class="container-login100">
        <div class="wrap-login100">
            <span class="login100-form-title p-b-26">
              Reset Password
            </span>
            <span class="login100-form-title p-b-48">
             <img src="{{ asset('images/logo.png') }} ">
            </span>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="login100-form validate-form" action="{{ route('password.email') }}">
                @csrf
            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is: a@b.c"
            >
              <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
              <span class="focus-input100" data-placeholder="Email"></span>           
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                 Send Password Reset Link
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('loging/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('loging/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('loging/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('loging/js/main.js')}}"></script>
</body>
</html>