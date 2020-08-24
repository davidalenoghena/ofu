@extends('layouts.home')


  <link href="{{ asset('blog_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('blog_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="{{ asset('blog_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/vendor/owl.carousel/assets/') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('blog_assets/blog.css') }}" rel="stylesheet">


@push('css')
    <title>Blog</title>
@endpush

<!------------------------------------------Beginning of body section------------------------------------------>
<section class="body">
   
<div class="row st1">
<div class="col-1 st2"></div>
<div class="col-4 st3">
    <br>
    <div>Home &nbsp <span>/</span>&nbspBlog &nbsp <span>/</span>&nbsp Blog Single</div> 
    <h3>Blog Single</h3> 

</div>
<div class="col-7"></div>
</div>


</section>
<!------------------------------------------End of body section------------------------------------------>

<!-- Vendor JS Files -->
  <script src="{{ asset('blog_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('blog_assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('blog/js/main.js') }}"></script>

@section('js')
    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
