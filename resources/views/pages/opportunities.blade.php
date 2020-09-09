@extends('layouts.home')
@push('css')
<head>
  <title>OFU - Opportunities</title>

  <!-- Favicons -->
  <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/opportunities.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')
    <div id="app" class = "container">
        <section class="heading">
            <!-- Heading -->
            <h1>Scholarships</h1>
        </section>
        <section id="search" class = "my-5">
            <div class="filter select">
                <select name="filter" id="filter">
                    <option selected disabled>Choose an option</option>
                    <option value="1">Scholarships</option>
                    <option value="2">Internships</option>
                    <option value="3">Grants</option>
                </select>
            </div>

            <div class="search">
                <div class="search-wrap">
                    <input type="text" name="search" class = "searchBox" placeholder = "Search...">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </section>

        <section id = "accordion" class="table">
            <div class="table-header">
                <p>Name</p>
                <p>Worth</p>
                <p>Eligibility</p>
                <p>Status</p>
            </div>
            <!-- <div class = " table-bg">
                <div class="table-main">
                        <p><strong><a href = "#">Shell JV Scholarship</a></strong></p>
                        <p>$20000</p>
                        <p>All Levels</p>
                        <p class = "yellow-text">Available</p>
                </div>
                <div class = "table-main-2">
                    <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a class="btn-link" href="#">See Full Details</a>
                    </div>
                </div>
                
            </div> -->

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#one" aria-expanded="false" aria-controls="five">
                        <div class="table-main">
                                <p><strong><a href = "#">Andela Scholarship</a></strong></p>
                                <p>$7000</p>
                                <p>All Levels</p>
                                <p class = "text-danger">Expiring Soon</p>
                        </div>
                    </button>
                </div>
                <div id="one" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#two" aria-expanded="false" aria-controls="five">
                        <div class="table-main">
                                <p><strong><a href = "#">AGIP JV Scholarship</a></strong></p>
                                <p>$20000</p>
                                <p>All Levels</p>
                                <p class = "text-muted">Not Available</p>
                        </div>
                    </button>
                </div>
                <div id="two" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#three" aria-expanded="false" aria-controls="five">
                        <div class="table-main">
                                <p><strong><a href = "#">Shell JV Scholarship</a></strong></p>
                                <p>$20000</p>
                                <p>All Levels</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="three" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#four" aria-expanded="false" aria-controls="five">
                        <div class="table-main">
                                <p><strong><a href = "#">Delta State Bursary</a></strong></p>
                                <p>$500</p>
                                <p>Delta State Students</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="four" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#five" aria-expanded="false" aria-controls="five">
                        <div class="table-main">
                                <p><strong><a href = "#">NLNG Scholarship</a></strong></p>
                                <p>$5000</p>
                                <p>100 Level</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="five" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#six" aria-expanded="false" aria-controls="six">
                        <div class="table-main">
                                <p><strong><a href = "#">Chevron Scholarship</a></strong></p>
                                <p>$10000</p>
                                <p>All Levels</p>
                                <p class = "text-danger">Expiring Soon</p>
                        </div>
                    </button>
                </div>
                <div id="six" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#seven" aria-expanded="false" aria-controls="seven">
                        <div class="table-main">
                                <p><strong><a href = "#">Shell JV Scholarship</a></strong></p>
                                <p>$20000</p>
                                <p>All Levels</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="seven" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#eight" aria-expanded="false" aria-controls="eight">
                        <div class="table-main">
                                <p><strong><a href = "#">MTN Scholarship</a></strong></p>
                                <p>$20000</p>
                                <p>200 Level</p>
                                <p class = "text-muted">Not Available</p>
                        </div>
                    </button>
                </div>
                <div id="eight" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#nine" aria-expanded="false" aria-controls="nine">
                        <div class="table-main">
                                <p><strong><a href = "#">Shell JV Scholarship</a></strong></p>
                                <p>$20000</p>
                                <p>All Levels</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="nine" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#ten" aria-expanded="false" aria-controls="ten">
                        <div class="table-main">
                                <p><strong><a href = "#">Jim Ovia Scholarship</a></strong></p>
                                <p>$2000</p>
                                <p>100 Level</p>
                                <p class = "yellow-text">Available</p>
                        </div>
                    </button>
                </div>
                <div id="ten" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src='{{asset('images/shell.png')}}' alt="shell-logo">
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <a class="btn-link" href="#">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        </section>

        

        <section >
        <nav aria-label="Page navigation example" class="pagination-body">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        </section>

        
    </div>
    <section id="subscribe">
        <div class="container d-flex">
            <div class="subscribe-content">
                <div>
                    <h3>Subscribe to <span class = "yellow-text">daily updates</span></h3>
                    <p class = " py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti et unde maxime. Earum cupiditate quasi ullam laboriosam amet quae assumenda ut fugiat quaerat. Cum, tempora.</p>
                    
                </div>
                <div>
                <form action="#" class = "d-flex row">
                    <div class = "form-group col-9">
                        <input type="email" class="form-control blue-border " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>

                    <button class="p-0 col-3 btn"><a class = "nav-link ml-0 m-top-neg  blue-border btn-blue" href="#">Subscribe</a></button>
                </form>
                <p class = "">By clicking “Subscribe” you accepting ipsum dolor sit amet, sit ea brute mediocritatem, eu sed aliquam scripserit dissentiunt.</p>
           
                </div>              
             </div>
        </div>
    </section>
@endsection

@section('js')
</section>

    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    
    <!-- Flickity JS -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src= "{{asset('js/nav.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection