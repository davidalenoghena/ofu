@extends ('admin.layouts.master')

@section ('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
   
</div>
<br>
<br>
 <div class="col-lg-10 col-md-10">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-10">{{ $intern_data->name }} </strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block" align="center">
                    <img class="" src="{{ asset('images/internship/'.$intern_data->img) }}" alt="Internship image" height="400" width="400">
                    <h5 class="text-sm-center mt-2 mb-1">{{$intern_data->status}}</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$intern_data->location}}</div>
                </div>
                <hr>
                <div class="card-text text-sm"><strong>Eligibility Slug:</strong>
                    {{ $intern_data->eligibility_slug }}
                </div>
                <hr>
                <div class="card-text text-sm">
                    <strong>Status:</strong>
                    {{ $intern_data->status_slug }}
                </div>
                <hr>
                <div class="card-text text-sm">
                    <strong>Detail:</strong>{{ $intern_data->detail }}
                </div>
                <hr>
                <div class="card-text text-sm">
                    <strong>About:</strong>{!! $intern_data->about !!}
                </div>
                <hr>
                <div class="card-text text-sm">
                    <strong>Eligibility:</strong>{!! $intern_data->eligibility !!}
                </div>
                <hr>
                <div class="card-text text-sm">
                    <strong>Description:</strong>
                    {!! $intern_data->description !!}
                </div>
                <hr>
                <div class="card-text text-sm"><strong>Note:</strong>
                    {!! $intern_data->note !!}
                </div>
                <div class="card-text text-sm">
                    {!! $intern_data->word !!}
                </div>

            </div>
        </div>
    </div>
    @endsection


