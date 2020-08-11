<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/9b1c8d52ed.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <!-- FLickity CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href='{{asset('css/home.css')}}'>

    <title>Opportunites For Undergraduates - Home</title>
</head>
<body>

    <!-- Nabar Section -->
    <nav class="navbar  navbar-expand-lg text-white navbar-dark fixed-top">
    <button class="navbar-toggler collapsed"type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="one"></span>
              <span class="two"></span>
              <span class="three"></span>
    </button>
          

    <div class="container">
    <div class="navbar-collapse collapse" id="navbarmenu">
        <div class="navbar-brand">
        <span><strong>this should be user dashboard <span class = "nav-span">.</span></strong></span>
        </div>

        <div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown ml">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opportunites</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="#">Blog</a>
                    <a class="dropdown-item" href="#"> action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item mr">
                    <a class="nav-link " href="#" >Contact</a>
                </li>
                <li class = "nav-item"><a class = "nav-link" href="#">Login</a></li>
                <li class = "nav-item btn-blue"><a class = "nav-link" href="#" >Get Started</a></li>
            </ul>
        </div>
    </div>
    </div>
    </nav>
    
    <!-- Hero Section -->
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

    <!-- Footer Section -->
    <section id="footer">
        <div class="container d-flex footer-sect">
            <div>
                <div>
                    <div class="navbar-brand">
                        <span><strong>opportunities for undergraduates <span class = "nav-span">.</span></strong></span>
                    </div>
                    <p class="yellow-text">Never Miss An Opportunity</p>
                </div>
                 <div>
                 <p> &copy; Copyright <script>document.write(new Date().getFullYear())</script></p>
                 <p> All Rights Reserved.</p>
                 </div>  
            </div>

            <div class="row">
            <div class = "col-md-4">
                <ul>
                    <li><strong>HELP AND SUPPORT</strong></li>
                    <li>FAQ</li>
                    <li>Live Support</li>
                    <li>Terms Of Service</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>

            <div class = "col-md-4">
                <ul>
                    <li><strong>FEATURES</strong></li>
                    <li><a href = "#">Scholarships</a></li>
                    <li><a href = "#">Internships</a></li>
                </ul>
            </div>

            <div class = "col-md-4">
                <ul>
                    <li><strong>COMPANY</strong></li>
                    <li><a href = "#">About</a></li>
                    <li><a href = "#">Contact</a></li>
                    <li><a href = "#">Careers</a></li>
                    <li><strong>CONTACT US</strong></li>
                    <li>hr@opportunitiesforundergraduates.com</li>
                    <li>(907)-555-0101</li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('js/home.js')}}"></script>
    
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>