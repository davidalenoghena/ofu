@extends('layouts.home')
@push('css')

<head>
  <title>OFU - Blog</title>

  <!-- Favicons -->
  <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/blog.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')

<div id="app">
  <!--Blog Heading  -->
  <section id="heading-blog" class="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="mb-3">Opportunities Blog</h1>
          <p>Welcome to our blog! You’ll find the best job search, resume writing, and career advice here. With the help of our experts, you’ll not only create a job-winning resume for any position but breeze through your job interview.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Blogs -->
  <section id="featured">
    <div class="container">
      <h2 class="text-center mb-5">Featured Posts</h2>
      <div class="row">
        <div class="col-md-12 card flex">
          <div class="width-45">
            <img src="{{ asset('images/bg-blog1.svg') }}" class="image cover" alt="job-illustration">
          </div>
          <div class="width-45  p-4">
            <span class="topic">{{ $blog1->category }}</span>
            <h2>{{ $blog1->blog_title }}</h2>
            <p>{{ $blog1->blog_post }}</p>
            <div class="flex">
              <p class="author"><i>by <strong>{{ $blog1->author }}</strong></i></p>
              <span class="date">{{ \Carbon\Carbon::parse($blog1->created_at)->diffForHumans() }}</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-card">
          <div class="card mb-3">
            <img src="{{ asset('images/card-bg.svg') }}" class="card-img-top image" alt="...">
            <div class="card-body">
              <span class="topic">{{ $blog2->category }}</span>
              <h3 class="card-title my-3">{{ $blog2->blog_title }}</h3>
              <p>{{ $blog2->blog_post }}</p>
              <div class="flex">
                <p class="author"><i>by <strong>{{ $blog2->author }}</strong></i></p>
                <span class="date">{{ \Carbon\Carbon::parse($blog2->created_at)->diffForHumans() }}</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-card">
          <div class="card mb-3">
            <img src="{{ asset('images/bg-blog2.svg') }}" class="card-img-top image" alt="...">
            <div class="card-body">
              <span class="topic">{{ $blog3->category }}</span>
              <h3 class="card-title my-3">{{ $blog3->blog_title }}</h3>
              <p>{{ $blog3->blog_post }}</p>
              <div class="flex">
                <p class="author"><i>by <strong>{{ $blog3->author }}</strong></i></p>
                <span class="date">{{ \Carbon\Carbon::parse($blog3->created_at)->diffForHumans() }}</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Subscribe Section -->
  <section id="subscribe">
    <div class="container d-flex">
      <div class="subscribe-content">
        <div>
          <h3 class="w-100">Subscribe to <span class="yellow-text">daily updates</span></h3>
          <p class="grey-text">We would send them directly to your mail to avoid spamming</p>  
        </div>
        <form action="#" class="d-flex row">
          <div class="form-group mr-0 col-9">
            <input type="email" class="form-control blue-border " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
          </div>
          <a class="nav-link col-3 btn text-white ml-0 m-top-neg  blue-border" href="#">Subscribe</a>
        </form>
      </div>
    </div>
  </section>

  <!-- Latest Blogs -->
  <section id="latest" class="container">
    <div class="container">
      <h2 class="text-center my-5">Latest Posts from <span class="yellow-text">Work Life</span></h2>
      <div class="row">
      @foreach($blogs as $blog)
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog3.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">{{ $blog->category }}</span>
              <h3 class="card-title my-3">{{ $blog->blog_title }}</h3>
              <p>{{ $blog->blog_post }}</p>
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
    {{ $blogs->links() }}
  </section>
</div>

@section('js')
<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Flickity JS -->
<script src="{{asset('js/nav.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
</body>

</html>