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
                <strong>Create New Opportunitiy</strong>
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('store.Opportunitiy') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Opportunitiy Name" class="form-control" value="{{ old('name') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Worth</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="worth" name="worth" placeholder="Opportunitiy Worth" class="form-control" value="{{ old('worth') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="status" name="status" placeholder="Status" class="form-control" value="{{ old('status') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Eligibility</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="eligibility_slug" name="eligibility_slug" placeholder="Eligibility" class="form-control" value="{{ old('eligibility_slug') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="status_slug" name="status_slug" placeholder="Status" class="form-control" value="{{ old('status_slug') }} " required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Detail</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="detail_1" name="detail_1" placeholder="Status" class="form-control" value="{{ old('detail_1') }} "required></div>
                    </div> 

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Second Detail</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="detail_2" name="detail_2" placeholder="Status" class="form-control" value="{{ old('detail_2') }} " required></div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">About</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="about" id="elm1" rows="5" placeholder="About" class="form-control">{{ old('about') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Eligibility</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="eligibility" id="elm1" rows="5" placeholder="Eligibility" class="form-control">{{ old('eligibility') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">How to Apply</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="how_to_apply" id="elm1" rows="5" placeholder="How to Appy" class="form-control">{{ old('how_to_apply') }}</textarea required ></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Requirements</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="requirements" id="elm1" rows="5" placeholder="Requirements" class="form-control">{{ old('requirements') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Note</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="note" id="elm1" rows="5" placeholder="Note" class="form-control">{{ old('note') }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Word</label></div>
                            <div class="col-12 col-md-9">
                                <textarea name="word" id="elm1" rows="5" placeholder="Word" class="form-control">{{ old('word') }}</textarea required></div>
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