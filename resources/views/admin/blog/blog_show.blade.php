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
                <strong class="card-title mb-10">{{ $blog_data->blog_title }} </strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block" align="center">
                    <img class="" src="{{ asset('images/blog/'.$blog_data->img) }}" alt="Blog image" height="400" width="400">
                    <h5 class="text-sm-center mt-2 mb-1">{{$blog_data->author}}</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$blog_data->category}}</div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    {!! $blog_data->blog_post !!}
                </div>
            </div>
        </div>
    </div>
    @endsection


