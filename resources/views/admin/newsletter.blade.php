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
                            <strong class="card-title">Subscribers</strong>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if($letter->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created</th>
                                        <th scope="col">Actions</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                     $count = 1;
                                    @endphp
                                    @foreach($letter as $row)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                                        <td><a href="/admin/subscriber/delete/{{ $row->id }}"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger">Delete</a></td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <h6 class="text-center text-danger">0 Subscribers in this category</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


       