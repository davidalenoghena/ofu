@extends('layouts.home') @push('css')
<title>OFU - Home</title>
@endpush @section('content')
<!-- Hero Section -->
<div class="content">
    <section id="hero">
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
                                    Subscribe for
                                    <span class="yellow-text">weekly updates </span>
                                </h3><br>

                                <form method="post" action="" class="d-flex">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control blue-border" name="email" placeholder="Enter email" size="35" />
                                    </div>
                                    <button type="submit" class="btn btn-blue">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container heading">
            <h1>Get access to life changing opportunities</h1>
            <p class="grey-text">
                Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te.
            </p>
            <div class="home-subscribe-content">
                <form action="#" class="d-flex row">
                    <div class="form-group mr-0 col-9">
                        <input type="email" class="form-control home blue-border " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>
                    <a class="nav-link col-3 btn text-white ml-0 m-top-neg home-btn " href="#">Subscribe</a>
                </form>

                <p class="grey-text mt-2 small">We would send them directly to your mail to avoid spamming</p>
            </div>
        </div>
    </section>

    <section id="about">
        <!-- <div class="container">
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
                        <a href="{{ route('opportunities.single', $op_first->id) }}">
                            <strong>{{ $op_first->name }}</strong></a> is currently opened and will be expiring soon
                    </p>
                    <button class="btn p-0">
                        <a class="nav-link transparent-btn" href="{{ route('opportunities') }}">View More</a>
                    </button>
                </div>
                <div class="opportunities-content-img-container mobile-left">
                    <div class="opportunities-content-img">

                        <img src="{{asset('images/opportunity/'.$op_first->img)}}" alt="{{ $op_first->name }}">
                    </div>
                </div>
            </div>

            <div class="opportunities-content pb-5 py-4">
                <div class="opportunities-content-img-container ">
                    <div class="opportunities-content-img-2">
                        <img src="{{ asset('images/internship/'.$in_first->img) }}">
                    </div>
                </div>
                <div class="opportunities-content-body ml-5">
                    <h3>Internships</h3>
                    <p>
                        <a href="{{ route('internships.single', $in_first->id) }}"><strong>{{ $in_first->name }}</strong></a> is currently opened and will be closing soon
                    </p>
                    <button class="btn p-0">
                        <a class="nav-link transparent-btn" href="{{ route('internships') }}">View More</a>
                    </button>
                </div>
            </div>
        </div> -->
    </section>

    <section id="opportunities">
        <div class="container">
            <div class="scholarships">
                <div class="img">
                    <img src="{{asset('images/scholarship.svg')}}" alt="scholarship-svg">
                </div>
                <h2>Scholarships</h2>
                <p class="grey-text">There are number of instructions to be followed at the time of refilling an inkjet cartridge. So whenever your printer ink runs dry you need to follow the below steps for inkjet cartridge refill.</p>
                <a href="{{ route('opportunities') }}" class="red-btn">Find Now<img src="{{asset('images/Arrow-Right.svg')}}" class="ml-2" alt="arrow-right"></a>
            </div>
            <div class="internships">
            <div class="img">
                    <img src="{{asset('images/internship.svg')}}" alt="internship-svg">
                </div>
                <h2>Internships</h2>
                <p class="grey-text">If you are looking for a new way to promote your business that won’t cost you more money, maybe printing is one of the options you won’t resist. Printing is a widely use process in making printed</p>
                <a href="{{ route('internships') }}" class="red-btn">Find Now<img src="{{asset('images/Arrow-Right.svg')}}" class="ml-2" alt="arrow-right"></a>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container pt-5 pb-5">
            <div class="blog-heading text-center">
                <h2>Blogs and Updates</h2>
                <p class="grey-text">
                    Tips and tricks on how to secure the bag
                </p>
            </div>
            <!-- <div class="blog-content   pt-4 row">
                <div class="col-12 blog col-lg-4">
                    <div class="blog-img">
                        <img src="{{asset('images/blog/'.$blog1->img)}}" alt="{{ $blog1->blog_title }}">
                    </div>
                    <h4 class="py-3">
                        {{ $blog1->blog_title }}
                    </h4>
                    <a href="{{ route('blog.single', $blog1->id) }}" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                        <img src="{{ asset('images/blog/'.$blog2->img) }}" alt="{{ $blog2->blog_title }}">
                    </div>
                    <h4 class="py-3">{{ $blog2->blog_title }}</h4>
                    <a href="{{ route('blog.single', $blog2->id) }}" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                        <img src="{{asset('images/blog/'.$ran_blog->img)}}" alt="{{ $ran_blog->blog_title }}">
                    </div>
                    <h4 class="pt-3 pb-2">
                    {{ $ran_blog->blog_title }}
                    </h4>
                    <a href="{{ route('blog.single', $ran_blog->id) }}" class="small yellow-text">Learn more</a>
                </div>
            </div> -->
            <div class="row ">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog1->img) }}" alt="{{ $blog1->blog_title }}">
                        <div class="card-body">
                            <span class="topic">{{ $blog1->category }}</span>
                            <h3 class="card-title my-3">{{ $blog1->blog_title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($blog1->blog_post, 150, $end='...') }} <a id="read-more" href="{{ route('blog.single', $blog1->id) }}"><em>Read more</em></a></p>
                            <div class="flex">
                                <p class="author"><i>by <strong>{{ $blog1->author }}</strong></i></p>
                                <span class="date">{{ \Carbon\Carbon::parse($blog1->updated_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog2->img) }}" alt="{{ $blog2->blog_title }}">
                        <div class="card-body">
                            <span class="topic">{{ $blog2->category }}</span>
                            <h3 class="card-title my-3">{{ $blog2->blog_title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($blog2->blog_post, 150, $end='...') }} <a id="read-more" href="{{ route('blog.single', $blog2->id) }}"><em>Read more</em></a></p>
                            <div class="flex">
                                <p class="author"><i>by <strong>{{ $blog2->author }}</strong></i></p>
                                <span class="date">{{ \Carbon\Carbon::parse($blog2->updated_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog1->img) }}" alt="{{ $blog1->blog_title }}">
                        <div class="card-body">
                            <span class="topic">{{ $ran_blog->category }}</span>
                            <h3 class="card-title my-3">{{ $ran_blog->blog_title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($ran_blog->blog_post, 150, $end='...') }} <a id="read-more" href="{{ route('blog.single', $ran_blog->id) }}"><em>Read more</em></a></p>
                            <div class="flex">
                                <p class="author"><i>by <strong>{{ $ran_blog->author }}</strong></i></p>
                                <span class="date">{{ \Carbon\Carbon::parse($ran_blog->updated_at)->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection