@extends('layouts.home')

<title>OFU - About</title>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OFU - About Us</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="{{ asset('about_assets/css/style.css') }}" rel="stylesheet">

</head>
<section class="general">
    <header class="section-header">
        <h3>About Us</h3>
        <br/>
    </header>

    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="row about-cols">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/about-mission.jpg') }}" alt="" class="img-fluid" />
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                        <p>
                            We ensure every student gets access to any available opportunity
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/about-plan.jpg') }}" alt="" class="img-fluid" />
                            <div class="icon">
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                        <p>
                            Ensure information about opportunities is easily accessible
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset('images/about-mission.jpg') }}" alt="" class="img-fluid" />
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                        <p>
                            Open to offer assistance to any student concerning any scholarship or internship questions or problems
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->
    @section('js')
</section>

<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Flickity JS -->
<script src="{{asset('js/nav.js')}}" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection