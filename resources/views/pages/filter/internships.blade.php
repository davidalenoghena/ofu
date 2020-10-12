@extends('layouts.home')
@push('css')
<head>
  <title>OFU - Internships</title>

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
            <h1>INTERNSHIPS</h1>
            <h4>Search results for {{ $your_search }}:</h4>
        </section>
        <section id="search" class = "my-5">
        @include('partials.infilter')
        </section>

        <section id = "accordion" class="table">
            <div class="table-header">
                <p>Name</p>
                <p>Location</p>
                <p>Eligibility</p>
                <p>Status</p>
            </div>
            @foreach($the_search as $internship)
            <div class = " table-bg">  
                <div class="card-header" id="headingThree">
                    <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $internship->word }}" aria-expanded="false" aria-controls="{{ $internship->word }}">
                        <div class="table-main">
                        <p><strong>{{ $internship->name }}</strong></p>
                                <p>{{ $internship->location }}</p>
                                <p>{{ $internship->eligibility_slug }}</p>
                                @if($internship->status_slug == 0)
                                    <p class = "text-danger">Expiring Soon</p>
                                @elseif($internship->status_slug == 1)
                                    <p class="yellow-text">Available</p>
                                @elseif($internship->status_slug == 2)
                                    <p class="text-muted">Not Available</p>
                                @endif
                        </div>
                    </button>
                </div>
                <div id="{{ $internship->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class = "table-main-2">
                            <img src="{{ asset('images/internship/'.$internship->img) }}" alt="{{ $internship->name }}">
                            <div>
                                <p>{{ $internship->detail }}</p>
                                <a class="btn-link" href="{{ route('internships.single', $internship->id) }}">See Full Details</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
            @endforeach       
        </section>

        <section>
        <nav aria-label="Page navigation example" class="pagination-body">
            {{ $the_search->links() }}
        </nav>
        </section>

    </div>
    <section id="subscribe" class="mb-5">
        <div class="container d-flex">
            <div class="subscribe-content">
                <div>
                    <h3>Subscribe for <span class = "yellow-text">weekly updates</span></h3>
                </div>
                <div>
                <form action="#" class = "d-flex mb-3 row">
                    <div class = "form-group mr-0 col-9">
                        <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>

                    <button class="p-0 col-3 btn"><a class = "btn-blue new" href="#">Subscribe</a></button>
                </form>
                </div>              
             </div>
        </div>
    </section>
    @endsection

@section('js')
</section>

    <!-- Bootstrap JS, PopperJS, jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    
    <!-- Filter Partial JS  -->
    
    <script src= "{{asset('js/nav.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    @push('js')
@endsection