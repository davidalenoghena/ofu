@extends('layouts.home')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OFU - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('contact_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('contact_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('contact_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('contact_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('contact_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('contact_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('contact_assets/vendor/owl.carousel/assets/') }}" rel="stylesheet">
  <link href="{{ asset('contact_assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('contact_assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Contact Section ======= -->
    <br>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        
          <h2>Contact Us</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fa fa-map-marker"></i>
                  <h3>Our Address</h3>
                  <p>University of Benin, Benin City, Edo State, Nigeria</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="fa fa-envelope-o"></i>
                  <h3>Email Us</h3>
                  <p>ofuapp@gmail.com<br>info@opportunitiesforundergraduates.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="fa fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>+234 (0)8107986162<br>+234 (0)8185879603</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          @if(session()->has('message'))
            <div class="alert alert-success" role="alert ">
                {{ session()->get('message') }}
            </div>
          @endif
          <form class="form-horizontal" id="contactform" method="post" action="{{ route('sendmail') }}">
            @csrf
            <div class="contact-form">
                <div class="col-sm-6">
                    <label>Enter your full name <span class="text-danger"><i class="fa fa-exclamation-circle text-danger pull-left"></i></span></label>
                      <div class="section-field">
                        <input id="name" type="text" class=" pull-right form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong><a class="text-danger">{{ $message }}</a></strong>
                        </span>
                        @enderror
                    </div>
                    <div class="section-field">
                        <label>Email <span class="text-danger"><i class="fa fa-exclamation-circle text-danger pull-left"></i></span></label>
                        <input  id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong><a class="text-danger">{{ $message }}</a></strong>
                        </span>
                        @enderror
                    </div>
                    <div class="section-field">
                        <label>Enter your phone number <span class="text-danger"></span></label>
                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number">
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong><a class="text-danger">{{ $message }}</a></strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-field textarea">
                        <label>Enter your message <span class="text-danger"><i class="fa fa-exclamation-circle text-danger pull-left"></i></span></label>
                        <textarea class="input-message" rows="5" name="message" @error('message') is-invalid @enderror></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong><a class="text-danger">{{ $message }}</a></strong>
                        </span>
                        @enderror
                    </div>
                  
                    <button id="submit" name="submit" type="submit" value="Send" class="button btn btn-blue">Submit</button>

            </div>

          </form>
          </div>

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
     
    </div>
  @section('js')

  <!-- Vendor JS Files -->
  <script src="{{ asset('contact_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('contact_assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('contact_assets/js/main.js') }}"></script>
  <script src= "{{asset('js/nav.js')}}"></script>
</body>

</html>
@endsection