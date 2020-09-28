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
    <div class="col-md-11">
        <div class="card">
            <div class="card-header">
                <strong>Create New Intership</strong>
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('store.intern') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Internship Name" class="form-control" value="{{ old('name') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Location</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="location" name="location" placeholder="Intern location" class="form-control" value="{{ old('location') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Slug</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="status_slug" name="status_slug" placeholder="status_slug" class="form-control" value="{{ old('status_slug') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Eligibility Slug</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="eligibility_slug" name="eligibility_slug" placeholder="Eligibility" class="form-control" value="{{ old('eligibility_slug') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Word</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="word" name="word" placeholder="Status" class="form-control" value="{{ old('word') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Eligibility</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="eligibility" id="elm1" rows="5" placeholder="Eligibility" class="form-control">{{ old('eligibility') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Details</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="detail" id="elm1" rows="5" placeholder="Eligibility" class="form-control">{{ old('detail') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">About</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="about" id="elm1" rows="5" placeholder="Eligibility" class="form-control">{{ old('about') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">How to Apply</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="how_to_apply" id="elm1" rows="5" placeholder="How to Appy" class="form-control">{{ old('how_to_apply') }}</textarea required ></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="description" id="elm1" rows="5" placeholder="Requirements" class="form-control">{{ old('description') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Note</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="note" id="elm1" rows="5" placeholder="Note" class="form-control">{{ old('note') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="status" id="elm1" rows="5" placeholder="status" class="form-control">{{ old('status') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file" required></div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection