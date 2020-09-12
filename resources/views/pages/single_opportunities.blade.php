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
  <link href="{{ asset('css/opportunities-single.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')
    <div id="opportune" class = "container">
        <div id="scholarship">
            <section class="heading">
                <!-- Heading -->
                <h2>Stanbic IBTC Bank scholarship</h2>
                <h6 class = "grey-text">September 7, 2020</h6>
            </section>

       
            <section id = "accordion" class="table">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Status
                                </a>
                            </h4>
                        </div>

                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                            This scholarship is currently available and application would end on 12th September, 2020. 
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Eligibility
                            </a>
                        </h4>
                        </div>

                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul>
                                    <li>Reside in Nigeria and participated in the 2020 University Tertiary Matriculation Examinations (UTME) conducted by JAMB </li>
                                    <li>Have a JAMB score of 200 and above</li>
                                    <li>Have gained admission and have been properly enrolled in a Nigerian Federal or State University with relevant evidence</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Requirements
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <ul>
                                    <li>Proof of origin from local government or state government</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                How To Apply
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <ul>
                                    <li>Visit <a href= "#">http://bit.ly/StanbicIBTCScholarship</a> </li>
                                    <li>Fill the form</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                Note
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                <ul>
                                    <li>The Scholarship will only be awarded to 100 Applicants spread across the 36 States of the federation and FCT with a minimum of 2 Applicants per State.</li>
                                    <li>The Scholarship will be offered on a first come, first serve basis until the 100 slots are allocated.</li>
                                    <li>Winners will only be contacted through the valid email address they provide. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>       
            </section>

            <div class = "navigate">
                <div class = "navigate_text">
                    <div class="arrow-icon mr-4">
                         <i class="fas fa-long-arrow-alt-left"></i>
                    </div>
                    <div>
                        <a href = "#">MTN Foundation Scholarship</a>
                    </div>
                </div>
                <div class = "navigate_text">
                    <div>
                        <a href = "#">Shell JV Scholarship</a>
                    </div>
                    <div class="arrow-icon ml-4">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    
                </div>
            </div>
        </div>
    

        <div id="blog_search">

            <section id="search" class = "my-5">

                <div class="search">
                    <div class="search-wrap">
                        <input type="text" name="search" class = "searchBox" placeholder = "Search...">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section>
                <ul class = "posts__list">
                    <li>Recent Posts</li>
                    <li>MTN Foundation Scholarship</li>
                    <li>MTN Foundation Scholarship</li>
                    <li>MTN Foundation Scholarship</li>
                    <li>MTN Foundation Scholarship</li>
                    <li>MTN Foundation Scholarship</li>
                </ul>
            </section>

        </div>
        
    </div>



    <section id="subscribe">
        <div class="container d-flex">
            <div class="subscribe-content">
                <div class = "w__50 mb-4">
                    <h3>Subscribe to <span class = "yellow-text">daily updates</span></h3>
                    
                </div>

                <div class = "w__50">
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