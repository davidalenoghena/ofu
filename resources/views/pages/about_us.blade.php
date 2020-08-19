@extends('layouts.home')

@push('css')
<title>Opportunites for Undergraduates - About</title>
@endpush

 <section id="opportunities" style="background-color: white; color: black;">
        <div class="container">
            <div class="opportunities-heading text-center">
                <h2>About <span class = "underline-span">Us</span></h2>
                <p class = "grey-text mt-4">We help the world’s leading organizations follow their shipping </p>
            </div> 

            <div class="opportunities-content content-1 py-4">
                <div class="opportunities-content-body">
                    <h3>Vision</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn p-0"><a class = "nav-link text-body transparent-btn" href="#">Learn More</a></button>  
                </div>
                <div class="opportunities-content-img-container">
                    <div class="opportunities-content-img">
                        <img src="{{asset('images/vision-statement-blog-11041.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="opportunities-content pb-5 py-4">
                <div class="opportunities-content-img-container ">
                    <div class="opportunities-content-img-2">
                        <img src="{{asset('images/our-mission.png')}}" alt="">
                    </div>
                </div>
                <div class="opportunities-content-body ml-5">
                    <h3>Mission</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem blanditiis, neque distinctio eaque praesentium quasi?</p> 
                    <button class="btn p-0"><a class = "nav-link text-body transparent-btn" href="#">Learn More</a></button>  
                </div>
            </div>
        </div>
    </section>

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