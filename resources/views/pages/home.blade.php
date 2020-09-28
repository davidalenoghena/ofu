@extends('layouts.home') @push('css')
<title>OFU - Home</title>
@endpush @section('content')
<!-- Hero Section -->
<div class="content">
    <section id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src='{{asset('images/hero-bg.png')}}' alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src='{{asset('images/hero-bg.png')}}' alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src='{{asset('images/hero-bg.png')}}' alt="Third slide">
                </div>
                <div class=" carousel-caption hero-content">
                    <div class="hero-content">
        <div class="container ">
            <div class="subscribe-content d-flex">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert ">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('failure'))
                    <div class="alert alert-danger" role="alert ">
                        {{ session()->get('failure') }}
                    </div>
                @endif
                <h3>
                    Subscribe to our
                    <span class="yellow-text">weekly updates </span>
                </h3>
                <form method="post" action="" class="d-flex">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" size="35" />
                    </div>
                    <button type="submit" class="btn btn-blue">Submit</button>
                </form>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="opportunities">
        <div class="container">
            <div class="opportunities-heading text-center">
                <h2>
                    Scholarship and Internship opportunities for
                    <span class="underline-span">undergraduates</span>
                </h2>
                <p class="grey-text mt-4">
                    Simple and Elegant
                </p>
            </div>

            <div class="opportunities-content content-1 py-4">
                <div class="opportunities-content-body">
                    <h3>Scholarships</h3>
                    <p>
                        <strong href="{{ route('opportunities.single', $op_first->id) }}">{{ $op_first->name }}</strong> " is currently opened and will be expiring soon
                    </p> 
                    <button class="btn p-0">
                        <a class="nav-link transparent-btn" href="#">View More</a>
                    </button>
                </div>
                <div class="opportunities-content-img-container mobile-left">
                    <div class="opportunities-content-img">
                        <img src='{{ asset("images/{!! $op_first->img !!}.png") }}' alt="{{ $op_first->name }}">
                    </div>
                </div>
            </div>

            <div class="opportunities-content pb-5 py-4">
                <div class="opportunities-content-img-container ">
                    <div class="opportunities-content-img-2">
                        <img src='{{ asset("images/{!! $in_first->img !!}") }}' alt="{{ $in_first->name }}">
                    </div>
                </div>
                <div class="opportunities-content-body ml-5">
                    <h3>Internships</h3>
                    <p>
                        <strong href="{{ route('internships.single', $in_first->id) }}">{{ $in_first->name }}</strong> is currently opened and will be closing soon
                    </p>
                    <button class="btn p-0">
                        <a class="nav-link transparent-btn" href="#">View More</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container pt-5 pb-5">
            <div class="blog-heading text-center">
                <h2>Blogs and Updates</h2>
                <p class="grey-text">
                    I don't know what we will write in all these places o.
                </p>
            </div>
            <div class="blog-content   pt-4 row">
                <div class="col-12 blog col-lg-4">
                    <div class="blog-img">
                        <img src='{{ asset("images/{!! $blog1->img !!}") }}' alt="{{ $blog1->blog_title }}">
                    </div>
                    <h4 class="py-3">
                        {{ $blog1->blog_title }}
                    </h4>
                    <a href="{{ route('blog.single', $blog1->id) }}" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                        <img src='{{ asset("images/{!! $blog2->img !!}") }}' alt="{{ $blog2->blog_title }}">
                    </div>
                    <h4 class="py-3">{{ $blog2->blog_title }}</h4>
                    <a href="{{ route('blog.single', $blog2->id) }}" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                        <img src='{{ asset("images/{!! $ran_blog->img !!}") }}' alt="{{ $ran_blog->blog_title }}">
                    </div>
                    <h4 class="pt-3 pb-2">
                    {{ $ran_blog->blog_title }}
                    </h4>
                    <a href="{{ route('blog.single', $ran_blog->id) }}" class="small yellow-text">Learn more</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection @section('js')
<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Flickity JS -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('js/nav.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection