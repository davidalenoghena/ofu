@extends('layouts.home')
  <head>
    <title>OFU - Login</title>
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
          <form class="login100-form validate-form" action="{{ route('login') }}">
          @csrf
            <span class="login100-form-title p-b-26">
              Login
            </span>
            <span class="login100-form-title p-b-48">
             <img src="{{ asset('images/logo.png') }} ">
            </span>

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

            <div
              class="wrap-input100 validate-input"
              data-validate="Enter password"
            >
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
              <input class="input100 @error('password') is-invalid @enderror" type="password" name="pass" id="password"required autocomplete="current-password"/>
              <span class="focus-input100" data-placeholder="Password"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="txt1" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                  Login
                </button>
              </div>
            </div>
            <br>
            @if (Route::has('password.request'))
                <a class="txt2" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <div class="text-center p-t-50" >
              <span class="txt1">
                Don’t have an account?
              </span>

              <a class="txt2" href=" {{ route('register') }} ">
                Sign Up
              </a>
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
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
