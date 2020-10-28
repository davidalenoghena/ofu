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
                            <strong class="card-title">Internship</strong>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if($intern->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Eligibility</th>
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
                                    @foreach($intern as $row)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                        <td>{{ \Illuminate\Support\Str::limit($row->name, 24, $end='...') }}</td>
                                        <td>{{ $row->location }}</td>
                                        <td>{!! $row->eligibility !!}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                                        <td><a href="{{ route('show.intern', ['id' => $row->id]) }}" class="btn btn-link text-primary">Read</a></td>
                                        <td><a href="{{ route('edit.intern', ['id' => $row->id]) }}" class="btn btn-link text-info">Edit</a></td>
                                        <td><a href="/admin/internship/delete/{{ $row->id }}"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger">Delete</a></td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <h6 class="text-center text-danger">0 Internship in this category</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


       