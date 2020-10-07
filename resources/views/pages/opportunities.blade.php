@extends('layouts.home')
@push('css')

<head>
    <title>OFU - Opportunities</title>

    <!-- Favicons -->
    <link href="{{ asset('about_assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('about_assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/opportunities.css') }}" rel="stylesheet">

</head>
@endpush
@section('content')
<div id="app" class="container">
    <section class="heading">
        <!-- Heading -->
        <h1>SCHOLARSHIPS</h1>
    </section>
    <section id="search" class="my-5">
        <form action="{{ route('opportunity.filter') }}" method="GET"> 
            @csrf   
            <div class="filter">
                <h3>Filter</h3>
                <select type="text" id="picker" name="picker[]" multiple="multiple"></select>
                <button type="submit" class="btn btn-primary">Apply</button>
            </div>
        </form>
        <div class="search">
            <form action="{{ route('opportunity.search') }}" method="GET">
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

    <section id="accordion" class="table">
        <div class="table-header">
            <p>Name</p>
            <p>Worth</p>
            <p>Eligibility</p>
            <p>Status</p>
        </div>
        @foreach($op_ex as $opportunity)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $opportunity->word }}" aria-expanded="false" aria-controls="{{ $opportunity->word }}">
                    <div class="table-main">
                        <p><strong>{{ $opportunity->name }}</strong></p>
                        <p>&#8358;{{ $opportunity->worth }}</p>
                        <p>{{ $opportunity->eligibility_slug }}</p>
                        <p class="text-danger">Expiring Soon</p>
                    </div>
                </button>
            </div>
            <div id="{{ $opportunity->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
                        <img src="{{ asset('images/opportunity/'.$opportunity->img) }}" alt="{{ $opportunity->name }}">
                        <div>
                            <p>{{ $opportunity->detail }}</p>
                            <a class="btn-link" href="{{ route('opportunities.single', $opportunity->id) }}">See Full Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($op_av as $opportunity)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $opportunity->word }}" aria-expanded="false" aria-controls="{{ $opportunity->word }}">
                    <div class="table-main">
                        <p><strong>{{ $opportunity->name }}</strong></p>
                        <p>&#8358;{{ $opportunity->worth }}</p>
                        <p>{{ $opportunity->eligibility_slug }}</p>
                        <p class="yellow-text">Available</p>
                    </div>
                </button>
            </div>
            <div id="{{ $opportunity->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
                        <img src="{{ asset('images/opportunity/'.$opportunity->img) }}" alt="{{ $opportunity->name }}">
                        <div>
                            <p>{{ $opportunity->detail }}</p>
                            <a class="btn-link" href="{{ route('opportunities.single', $opportunity->id) }}">See Full Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($op_not_av as $opportunity)
        <div class=" table-bg">
            <div class="card-header" id="headingThree">
                <button class="btn btn-drop collapsed" data-toggle="collapse" data-target="#{{ $opportunity->word }}" aria-expanded="false" aria-controls="{{ $opportunity->word }}">
                    <div class="table-main">
                        <p><strong>{{ $opportunity->name }}</strong></p>
                        <p>&#8358;{{ $opportunity->worth }}</p>
                        <p>{{ $opportunity->eligibility_slug }}</p>
                        <p class="text-muted">Not Available</p>
                    </div>
                </button>
            </div>
            <div id="{{ $opportunity->word }}" class="collapse accordion-show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <div class="table-main-2">
                        <img src="{{ asset('images/opportunity/'.$opportunity->img) }}" alt="{{ $opportunity->name }}">
                        <div>
                            <p>{{ $opportunity->detail }}</p>
                            <a class="btn-link" href="{{ route('opportunities.single', $opportunity->id) }}">See Full Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <section>
        <nav aria-label="Page navigation example" class="pagination-body">
            {{ $op_not_av->links() }}
        </nav>
    </section>

</div>
<section id="subscribe" class="mb-5">
    <div class="container d-flex">
        <div class="subscribe-content">
            <div>
                <h3>Subscribe for <span class="yellow-text">weekly updates</span></h3>
            </div>
            <div>
                <form action="#" class="d-flex mb-3 row">
                    <div class="form-group mr-0 col-9">
                        <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>

                    <button class="p-0 col-3 btn"><a class="btn-blue new" href="#">Subscribe</a></button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<!-- Bootstrap JS, PopperJS, jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>

<!-- Flickity JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="{{asset('js/nav.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var options = [{
                label: 'Eligibility',
                children: [{
                        label: '100 level',
                        title: 'Option 1',
                        value: '100 level'
                    },
                    {
                        label: '200 level',
                        title: 'Option 2',
                        value: '200 level'
                    },
                    {
                        label: '300 level',
                        title: 'Option 3',
                        value: '300 level'
                    },
                    {
                        label: '400 level',
                        title: 'Option 4',
                        value: '400 level'
                    },
                    {
                        label: '500 level',
                        title: 'Option 5',
                        value: '500 level'
                    }
                ]
            },
        ];

        $('#picker').multiselect({
            enableCollapsibleOptGroups: true
        });

        $('#picker').multiselect('dataprovider', options);
    });
</script>

@endsection