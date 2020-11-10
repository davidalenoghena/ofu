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
    <link href="{{ asset('css/opportunities-single.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')
<div id="opportune" class="container">
    <div id="scholarship">
        <section class="opp-single heading">
            <div>
                <!-- Heading -->
                <h2>{{ $in_data->name }}</h2>
                <h6 class="grey-text">Updated: {{ $in_data->updated_at->diffForHumans() }}</h6>
            </div>
            <div>
                <img src="{{asset('images/internship/'.$in_data->img)}}" alt="{{ $in_data->name }}">
            </div>
        </section>


        <section id="accordion" class="table">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                About
                            </a>
                        </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            {!! $in_data->about !!}
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
                            {!! $in_data->eligibility !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Status
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            {!! $in_data->status !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Location
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFOur">
                        <div class="panel-body">
                            {!! $in_data->location !!}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Description
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            {!! $in_data->description !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How To Apply
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                            {!! $in_data->how_to_apply !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSeven">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Note
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        <div class="panel-body">
                            {!! $in_data->note !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="navigate">
            @if($in_data->id > 1)
            <div class="navigate_text">
                <div class="arrow-icon mr-4">
                    <a href="{{ route('internships.single', $previous_data->id) }}">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </a>
                </div>
                <div>
                    <a href="{{ route('internships.single', $previous_data->id) }}">{{ $previous_data->name }}</a>
                </div>
            </div>
            @else
            <div class="navigate_text">
                <div class="arrow-icon mr-4">
                    <a href="{{ route('internships.single', $last_data->id) }}">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </a>
                </div>
                <div>
                    <a href="{{ route('internships.single', $last_data->id) }}">{{ $last_data->name }}</a>
                </div>
            </div>
            @endif
            @if($in_data->id < count($all_data)) <div class="navigate_text">
                <div>
                    <a href="{{ route('internships.single', $next_data->id) }}">{{ $next_data->name }}</a>
                </div>

                <div class="arrow-icon ml-4">
                    <a href="{{ route('internships.single', $next_data->id) }}">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
        </div>
        @endif
    </div>
</div>


<div id="blog_search">

    <section id="search" class="my-5">

        <div class="search">
            <form action="{{ route('internship.search') }}" method="GET">
                @csrf
                <div class="search-wrap">
                    <input type="text" name="search" id="search" class="searchBox" placeholder="Search...">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- @if (count($in_cl)>0)
            <section>
                <ul class = "posts__list">
                    <li>closing Internships</li>
                    @foreach ($in_cl as $internship)
                    <li><a class="btn-link" href="{{ route('internships.single', $internship->id) }}">{{ $internship->name }}</a></li>
                    @endforeach
                </ul>
            </section>
            @endif
            @if (count($in_av)>0)
            <section>
                <ul class = "posts__list">
                    <li>Available Internships</li>
                    @foreach ($in_av as $internship)
                    <li><a class="btn-link" href="{{ route('internships.single', $internship->id) }}">{{ $internship->name }}</a></li>
                    @endforeach
                </ul>
            </section>
            @endif -->
    <section id="blog-op">
        <h4 class="my-3 text-center">Latest Blog Posts</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog_first->img) }}" alt="{{ $blog_first->blog_title }}">
                    <div class="card-body">
                        <span class="topic">{{ $blog_first->category }}</span>
                        <h3 class="card-title my-3">{{ $blog_first->blog_title }}</h3>
                        <a id="read-more" href="{{ route('blog.single', $blog_first->id) }}"><em>Read more</em></a></p>
                        <div class="flex">
                            <p class="author"><i>by <strong>{{ $blog_first->author }}</strong></i></p>
                            <span class="date">{{ \Carbon\Carbon::parse($blog_first->created_at)->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img class="card-img-top image cover" src="{{ asset('images/blog/'.$blog_second->img) }}" alt="{{ $blog_second->blog_title }}">
                    <div class="card-body">
                        <span class="topic">{{ $blog_second->category }}</span>
                        <h3 class="card-title my-3">{{ $blog_second->blog_title }}</h3>
                        <a id="read-more" href="{{ route('blog.single', $blog_second->id) }}"><em>Read more</em></a></p>
                        <div class="flex">
                            <p class="author"><i>by <strong>{{ $blog_second->author }}</strong></i></p>
                            <span class="date">{{ \Carbon\Carbon::parse($blog_second->created_at)->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</div>



@include('partials.subscribe')

@endsection

@section('js')
</section>

<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Flickity JS -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('js/nav.js')}}" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection