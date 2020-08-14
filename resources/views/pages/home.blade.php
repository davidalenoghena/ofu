@extends('layouts.home') 
@section('content')
    <!-- Hero Section -->
    <div class = "content">
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
                <img class="d-block w-100" src='{{asset('images/hero-bg.png')}}'  alt="Third slide">
                </div>
                <div class=" carousel-caption hero-content">
                    <div class="hero-content">
                    
                    <h1>Get access to <span class = "underline-span">life changing opportunities</span></h1>
                    
                    <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te.</p>
                    
                    <div class="hero-btn">
                        <li class = "nav-item btn-blue"><a class = "nav-link" href="#" >Get Started</a></li>    
                        <li class = "nav-item"><a class = "nav-link transparent-btn" href="#">Learn More</a></li>    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  


    <section id="about">
        <div class="container">

        <div class="about-video">
            <i class="far fa-play-circle"></i>
        </div>
        <div class="about-content">
        
        <div class="about-content-heading">
        <h2>Opportunities can come <span class="underline-span"> more than once</span> </h2>
        </div>

        <div class="about-content-body my-4">
        <p class = "grey-text">Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum.</p>
        </div>

        <div class="about-btn">
        <button class="btn p-0"><a class = "nav-link transparent-btn" href="#">Learn More</a></button>
        </div>
        
        </div>
        </div>
        <div class = "container m-top d-flex">
            <div class="text-center px-5">
                <h3>7200+</h3>
                <p>Healthy and Happy Customers</p>
            </div>
            <div class="text-center px-5">
                <h3>120+</h3>
                <p>Professional Medical Specialists</p>
            </div>
            <div class="text-center px-5">
                <h3>20+</h3>
                <p>Years of Impeccable Services</p>
            </div>
            <div class="text-center px-5">
                <h3>450+</h3>
                <p>Local And International Awards For Our Clinic</p>
            </div>
        </div>
    </section>


    <section id="opportunities">
        <div class="container">
            <div class="opportunities-heading text-center">
                <h2>Opportunities abound to <span class = "underline-span">undergraduates</span></h2>
                <p class = "grey-text mt-4">We help the world’s leading organizations follow their shipping </p>
            </div> 

            <div class="opportunities-content content-1 py-4">
                <div class="opportunities-content-body">
                    <h3>Scholarships</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn p-0"><a class = "nav-link transparent-btn" href="#">Learn More</a></button>  
                </div>
                <div class="opportunities-content-img-container">
                    <div class="opportunities-content-img">
                        <img src='{{asset('images/blue-bg.png')}}' alt="">
                    </div>
                </div>
            </div>


            <div class="opportunities-content pb-5 py-4">
                <div class="opportunities-content-img-container ">
                    <div class="opportunities-content-img-2">
                        <img src='{{asset('images/blue-bg.png')}}' alt="">
                    </div>
                </div>
                <div class="opportunities-content-body ml-5">
                    <h3>Internships</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn p-0"><a class = "nav-link transparent-btn" href="#">Learn More</a></button>  
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container pt-5 pb-5">
            <div class="blog-heading text-center">
                <h2>Your best value proposition</h2>
                <p class = "grey-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ipsa eos deleniti mollitia ab asperiores?</p>
            </div>
            <div class="blog-content   pt-4 row">
                <div class="col-12 blog col-lg-4">
                    <div class="blog-img">
                    <img src='{{asset('images/black-bg.png')}}' alt="">
                    </div>
                    <h4 class = "py-3">How to apply for international scholarships</h4>
                    <a href="#" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                    <img src='{{asset('images/black-bg.png')}}' alt="">
                    </div><h4 class = "py-3">How to apply for local scholarships</h4>
                    <a href="#" class="small yellow-text">Learn more</a>
                </div>
                <div class="col-12  blog col-lg-4">
                    <div class="blog-img">
                        <img src='{{asset('images/black-bg.png')}}' alt="">
                    </div><h4 class = "pt-3 pb-2">How to just sit and do nothing while hoping to comes to you</h4>
                    <a href="#" class="small yellow-text">Learn more</a>
                </div>
            </div>
            </div>
    </section>

    <section id="testimonial">
        <div class="container pt-5">
            <div class="testimonial-heading text-center">
                <h2>What our <span class="underline-span">clients</span> are saying</h2>
                <p class = "mt-4">We help the world's leading organization with their shipping</p>
            </div>

            <!-- Testimonial Carousel -->
            <div class="carousel mtop" data-flickity='{ "autoPlay": true }'>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
            </div>

        </div>
    </section>

    <section id="subscribe">
        <div class="container d-flex">
            <div class="about-video subscribe">
                <i class="far fa-play-circle"></i>
            </div>
            <div class="subscribe-content">
                <h3>Subscribe to daily updates on opportunities</h3>
                <p class = "grey-text py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti et unde maxime. Earum cupiditate quasi ullam laboriosam amet quae assumenda ut fugiat quaerat. Cum, tempora.</p>
                <form action="#" class = "d-flex row">
                    <div class = "form-group col-9">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <button class="p-0 col-3 btn"><a class = "nav-link ml-0 m-top-neg  btn-blue" href="#">Subscribe</a></button>
                </form>
                <p class = "grey-text">By clicking “Subscribe” you accepting ipsum dolor sit amet, sit ea brute mediocritatem, eu sed aliquam scripserit dissentiunt.</p>
            </div>
        </div>
    </section>
</div>
@endsection
@section('js')
    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('js/home.js')}}"></script>
    
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection