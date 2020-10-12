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
            <span class="topic">LifeStyle</span>
            <h2>How to Land a Job in Your Dream Location? Ideas and Insider Stories</h2>
            <p>Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or the Wolf of Wall Street, you probably hate it.
              Nothing wrong with that — a traditional elevator pitch is a lost cause. Here’s how to fix yours to make it actually work!</p>
            <div class="flex">
              <p class="author">David Alenoghena</p>
              <span class="date">04 Jun 2018</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-card">
          <div class="card mb-3">
            <img src="{{ asset('images/card-bg.svg') }}" class="card-img-top image" alt="...">
            <div class="card-body">
              <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">How to Land a Job in Your Dream Location? Ideas and Insider Stories</h3>
              <p>Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or the Wolf of Wall Street, you probably hate it.
                Nothing wrong with that — a traditional elevator pitch is a lost cause. Here’s how to fix yours to make it actually work!</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-card">
          <div class="card mb-3">
            <img src="{{ asset('images/bg-blog2.svg') }}" class="card-img-top image" alt="...">
            <div class="card-body">
              <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">How to Land a Job in Your Dream Location? Ideas and Insider Stories</h3>
              <p>Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or the Wolf of Wall Street, you probably hate it.
                Nothing wrong with that — a traditional elevator pitch is a lost cause. Here’s how to fix yours to make it actually work!</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Latest Blogs -->
  <section id="latest" class="container">
    <div class="container">
      <h2 class="text-center my-5">Latest Posts from <span class="yellow-text">Work Life</span></h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog3.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog4.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog5.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog3.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog4.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <img class="card-img-top image cover" src="{{ asset('images/bg-blog5.svg') }}" alt="blog-illustration">
            <div class="card-body">
             <span class="topic">LifeStyle</span>
              <h3 class="card-title my-3">Where To Look For Cheap Brochure Printing </h3>
              <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
              <div class="flex">
                <p class="author">David Alenoghena</p>
                <span class="date">04 Jun 2018</span>
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

  <!-- Pagination -->
  <section id="pagination" class="container">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link prev" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link next" href="#">Next</a></li>
      </ul>
    </nav>
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