@extends('layouts.home') @push('css')
<title>OFU - Home</title>
@endpush @section('content')
<!-- Hero Section -->
<div class="content">
    <section id="hero">
        <div class="container heading">
            <h1>Get access to life changing opportunities</h1>
            <p class="grey-text">
                Subscribe to receive weekly updates on available scholarships and internships
            </p>
            <div class="home-subscribe-content">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert ">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                <form action="{{ route('subscribe') }}" class="d-flex row" method="POST">
                    @csrf
                    <div class="form-group mr-0 col-9">
                        <input type="email" name="email" class="form-control home blue-border " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" required>
                    </div>
                    <button class="nav-link col-3 btn text-white ml-0 m-top-neg home-btn">Subscribe</button>
                </form>

                <p class="grey-text mt-2 small">We will be in touch</p>
            </div>
        </div>
    </section>

    <section id="opportunities">
        <div class="container">
            <div class="scholarships">
                <div class="img">
                    <img src="{{asset('images/scholarship.svg')}}" alt="scholarship-svg">
                </div>
                <h2>Scholarships</h2>
                <p class="grey-text">Get a comprehensive list of scholarships expiring soon, currently available and not currently available. Filter based on your level and search for any scholarship of your choice with respect to it's name</p>
                <a href="{{ route('opportunities') }}" class="red-btn">Check it out<img src="{{asset('images/Arrow-Right.svg')}}" class="ml-2" alt="arrow-right"></a>
            </div>
            <div class="internships">
            <div class="img">
                    <img src="{{asset('images/internship.svg')}}" alt="internship-svg">
                </div>
                <h2>Internships</h2>
                <p class="grey-text">Get a comprehensive list of internships closing soon, currently available and not currently available. Filter based on your level and search for any scholarship of your choice with respect to it's name or location</p>
                <a href="{{ route('internships') }}" class="red-btn">Check it out<img src="{{asset('images/Arrow-Right.svg')}}" class="ml-2" alt="arrow-right"></a>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container pt-5 pb-5">
            <div class="blog-heading text-center">
                <h2>Blog and Updates</h2>
                <p class="grey-text">
                    Read relevant posts and <a href="{{ route('contact') }}">contact us</a> if you wish to have your article posted
                </p>
            </div>
            <div class="row ">
                @foreach($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog->img) }}" alt="{{ $blog1->blog_title }}">
                        <div class="card-body">
                            <span class="topic">{{ $blog->category }}</span>
                            <h3 class="card-title my-3">{{ $blog->blog_title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($blog->blog_post, 150, $end='...') }} <a id="read-more" href="{{ route('blog.single', $blog1->id) }}"><em>Read more</em></a></p>
                            <div class="flex">
                                <p class="author"><i>by <strong>{{ $blog->author }}</strong></i></p>
                                <span class="date">{{ \Carbon\Carbon::parse($blog->updated_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection