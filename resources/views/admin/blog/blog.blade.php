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

<div class="content mt-3">
    <br>
    <br>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Blog Posts</strong>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if($blogs->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Blog Post</th>
                                        <th scope="col">Created</th>
                                        <th></th>
                                        <th scope="col">Actions</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                     $count = 1;
                                    @endphp
                                    @foreach($blogs as $blog_item)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{!! \Illuminate\Support\Str::limit($blog_item->blog_title, 24, $end='...') !!}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog_item->blog_post, 34, $end='...') }}</td>
                                        <td>{{ $blog_item->created_at }}</td>
                                        <td><a href="{{ route('show.blog', ['id' => $blog_item->id]) }}" class="btn btn-link text-info">Read</a></td>
                                        <td><a href="{{ route('edit.blog', ['id' => $blog_item->id]) }}" class="btn btn-link text-info">Edit</a></td>
                                        <td><a href="{{ route('disable.blog', ['id' => $blog_item->id]) }}" class="btn btn-link text-danger">Unpublish</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <h6 class="text-center text-danger">0 BLog in this category</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


       