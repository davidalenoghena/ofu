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

    <div id="app" >
      <!--Blog Heading  -->
      <section id="heading" class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="mb-3">Opportunities Blog</h1>
            <p>Welcome to our blog! You’ll find the best job search, resume writing, and career advice here. With the help of our experts, you’ll not only create a job-winning resume for any position but breeze through your job interview.</p>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('blog_assets/img/illustration.svg') }}" class="image" alt="blog-illustration">
          </div>
        </div>
      </section>

      <!-- Featured Blogs -->
      <section id="featured">
        <div class="container">
            <h2 class="text-center mb-5">Featured Posts</h2>
            <div class="row">
              <div class="col-md-12 card flex">
                <div class = "width-45">
                  <img src="{{ asset('blog_assets/img/job.svg') }}" class="image cover" alt="job-illustration">
                </div>
                <div class = "width-45  p-2">
                  <h2>How to Land a Job in Your Dream Location? Ideas and Insider Stories</h2>
                  <p>Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or the Wolf of Wall Street, you probably hate it. 
                    Nothing wrong with that — a traditional elevator pitch is a lost cause. Here’s how to fix yours to make it actually work!</p>
                </div>
              </div>

              <div class="col-md-6 mt-card">
                <div class="card mb-3">
                  <img src="{{ asset('blog_assets/img/pitch.svg') }}" class="card-img-top image" alt="...">
                  <div class="card-body">
                    <h3 class="card-title my-3">Elevator Pitch: What’s Wrong With It & How to Make Yours Work</h3>
                    <p class="card-text">Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or
                      the Wolf of Wall Street, you probably hate it. Nothing wrong with that — a traditional elevator pitch is a lost cause. 
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mt-card">
                <div class="card mb-3">
                  <img src="{{ asset('blog_assets/img/pitch.svg') }}" class="card-img-top image" alt="...">
                  <div class="card-body">
                    <h3 class="card-title my-3">Elevator Pitch: What’s Wrong With It & How to Make Yours Work</h3>
                    <p class="card-text">Oh, the dreaded elevator pitch. Unless you’re one of the slick salesmen from Mad Men or
                      the Wolf of Wall Street, you probably hate it. Nothing wrong with that — a traditional elevator pitch is a lost cause. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

      <!-- Latest Blogs -->
      <section id="latest" class= "container">
        <div class="container">
          <h2 class="text-center my-5">Latest Posts</h2>
          <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top image cover" src="{{ asset('blog_assets/img/data.svg') }}" alt="blog-illustration">
                  <div class="card-body">
                    <small class="text-muted uppercase">26 sep 2020</small>
                    <h5 class="card-title my-3">Where To Look For Cheap Brochure Printing </h5>
                    <p class="card-text mb-3">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.</p>
                    <div class="card-text text-muted d-flex">
                    <i class="far fa-comments"></i><small class="mr-3">7.4k</small>
                    <i class="far fa-eye"></i><small>45</small>
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
                    <h3>Subscribe to <span class = "yellow-text">daily updates</span></h3>
                    <form action="#" class = "d-flex row">
                        <div class = "form-group mr-0 col-9">
                            <input type="email" class="form-control blue-border " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                        </div>
                        <a class = "nav-link col-3 btn text-white ml-0 m-top-neg  blue-border" href="#">Subscribe</a>
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
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src= "{{asset('js/nav.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
</body>

</html>
