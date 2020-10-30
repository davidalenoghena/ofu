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
<div id="app">
    <section id="title-heading">
        <!-- Heading -->
        <h1 class="container">Internships</h1>
    </section>
    <section id="search" class="my-5 container">
        <!-- <form action="{{ route('internship.filter') }}" method="GET"> 
                @csrf   
                <div class="filter">
                    <h3>Filter</h3>
                    <select type="text" id="picker" name="picker[]" multiple="multiple"></select>
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
            </form> -->
        @include('partials.infilter')
    </section>

    <section id="accordion" class="table container">
        <div class="table-header">
            <p>Name</p>
            <p>Location</p>
            <p>Eligibility</p>
            <p>Status</p>
        </div>
        @foreach($in_cl as $internship)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $internship->word }}" aria-expanded="false" aria-controls="{{ $internship->word }}">
                    <div class="table-main">
                        <p><strong>{{ $internship->name }}</strong></p>
                        <p>{{ $internship->location }}</p>
                        <p>{{ $internship->eligibility_slug }}</p>
                        <p class="text-danger">Closing Soon</p>
                    </div>
                </button>
            </div>
            <div id="{{ $internship->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
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
        @foreach($in_av as $internship)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $internship->word }}" aria-expanded="false" aria-controls="{{ $internship->word }}">
                    <div class="table-main">
                        <p><strong>{{ $internship->name }}</strong></p>
                        <p>{{ $internship->location }}</p>
                        <p>{{ $internship->eligibility_slug }}</p>
                        <p class="yellow-text">Available</p>
                    </div>
                </button>
            </div>
            <div id="{{ $internship->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
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
        @foreach($in_not_av as $internship)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $internship->word }}" aria-expanded="false" aria-controls="{{ $internship->word }}">
                    <div class="table-main">
                        <p><strong>{{ $internship->name }}</strong></p>
                        <p>{{ $internship->location }}</p>
                        <p>{{ $internship->eligibility_slug }}</p>
                        <p class="text-muted">Not Available</p>
                    </div>
                </button>
            </div>
            <div id="{{ $internship->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
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

    <section  class="container">
        <nav aria-label="Page navigation example" class="pagination-body">
            {{ $in_not_av->links() }}
        </nav>
    </section>

</div>
@include('partials.subscribe')

@endsection

@section('js')
</section>

<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Filter Partial JS  -->

<script src="{{asset('js/nav.js')}}" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@push('js')
@endsection