<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Opportunites For Undergraduates - Home</title>
</head>
<body>
    <!-- Nabar Section -->
    <nav class="navbar  navbar-expand-lg navbar-inverse bg-transparent fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse container navbar-collapse justify-content-md-center" id="navbarsExample08">

        <div class="navbar-brand">
        <span>opportunities for undergraduates</span>
        </div>
        <div>
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#" >About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opportunites</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
            <a class="dropdown-item" href="#">Blog</a>
            <a class="dropdown-item" href="#"> action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        </ul>
        </div>

        <div class="navbar-btns">
        
        </div>
       
    </div>
    </nav>
    
    <!-- Hero Section -->
    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"> -->
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
        </div>
    </div>

    <section id="about">
        <div class="container">

        <div class="about-video">
        </div>
        <div class="about-content">
        
        <div class="about-content-heading">
        <h2>Opportunities can come more than once </h2>
        </div>

        <div class="about-content-body">
        <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum.</p>
        </div>

        <div class="about-btn">
        <button class="btn-primary"><a href="#" class = "text-white">Learn More</a></button>
        </div>
        
        </div>
        </div>
    </section>

    <section id="count">
    <div class = "container d-flex">
    <div class="text-center">
        <h3>7200+</h3>
        <p>Healthy and Happy Customers</p>
    </div>
    <div class="text-center">
        <h3>120+</h3>
        <p>Professional Medical Specialists</p>
    </div>
    <div class="text-center">
        <h3>20+</h3>
        <p>Years of Impeccable Services</p>
    </div>
    <div class="text-center">
        <h3>450+</h3>
        <p>Local And International Awards For Our Clinic</p>
    </div>
    </div>
    </section>

    <section id="opportunites">
        <div class="container">
            <div class="opportunities-heading">
                <h2>Opportunities abound to <span>undergraduates</span></h2>
                <p>We help the world’s leading organizations follow their shipping </p>
            </div>    
            <div class="opportunities-content">
                <div class="opportunities-content-body">
                    <h3>Scholarships</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn-primary"><a href="#" class="text-white">Learn More</a></button>   
                </div>
                <div class="opportunities-content-img">
                    <img src='{{asset('images/blue-bg.png')}}' alt="">
                </div>
            </div>
            <div class="opportunities-content">
                <div class="opportunities-content-body">
                    <h3>Scholarships</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn-primary"><a href="#" class="text-white">Learn More</a></button>   
                </div>
                <div class="opportunities-content-img">
                    <img src='{{asset('images/blue-bg.png')}}' alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
        
        </div>
    </section>

    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>