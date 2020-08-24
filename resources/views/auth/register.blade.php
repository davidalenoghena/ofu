@extends('layouts.home')
  <head>
    <title>OFU - Register</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
      <br />
      <div class="container-login100">
        <div class="wrap-login100">
          <form method="POST" class="login100-form validate-form" action="{{ route('register') }}">
          @csrf
            <span class="login100-form-title p-b-26">
              Join Us
            </span>
            <span class="login100-form-title p-b-48">
              <img src="{{ asset('images/logo.png') }} ">
            </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Name is: David"
            >
              <input class="input100" type="text" name="fname" id="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus/>
              <span class="focus-input100" data-placeholder="First Name"></span>
              @error('fname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Name is: David"
            >
              <input class="input100" type="text" name="lname" id="lname" value="{{ old('lname') }}" required autocomplete="fname" autofocus/>
              <span class="focus-input100" data-placeholder="Last Name"></span>
              @error('lname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is: a@b.c"
            >
              <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"/>
              <span class="focus-input100" data-placeholder="Email"></span>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Valid Phone Number is: 080******88"
            >
              <input id="phone" class="input100 @error('phone') is-invalid @enderror" type="number" name="phone" value="{{ old('phone') }}" required autocomplete="number"/>
              <span class="focus-input100" data-placeholder="Phone Number"></span>
              @error('phone')
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
              <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password"/>
              <span class="focus-input100" data-placeholder="Password"></span>
            </div>
            <div
              class="wrap-input100 validate-input"
              data-validate="Password doesn't match"
            >
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
              <input id="password-confirm" class="input100" type="password" name="password_confirmation" required autocomplete="new-password" />
              <span class="focus-input100" data-placeholder="Confirm Password"></span>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                  {{ __('Register') }}
                </button>
              </div>
            </div>

            <div class="text-center p-t-50">
              <span class="txt1">
                Already have an account?
              </span>

              <a class="txt2" href="{{ route('login') }} ">
                Sign in
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
    <div class="row justify-content-center ">
            <div class="col-6">

            </div>

            <div class="col-6">
                <div class="register"></div>
                <br>

                <div class="register">{{ __('Register') }}</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left" style="color: #30015B">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left" style="color: #30015B">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left" style="color: #30015B">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left" style="color: #30015B">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" align="center"  style="color: purple">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>      
    </div>
<br>
<br> -->