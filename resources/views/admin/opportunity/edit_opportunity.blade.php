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
                <strong>Edit opportunity</strong>
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            <div class="card-body card-block">
                <form action="{{ route('update.opportunity', ['id' => $opportunity->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name
                        </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" value="{{ $opportunity->name }}" class="form-control" required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Worth
                        </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="worth" name="worth" value="{{ $opportunity->worth }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status (0|1|2)
                        </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="status_slug" name="status_slug" value="{{ $opportunity->status_slug }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Eligibility (100 level)
                        </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="eligibility" name="eligibility_slug" value="{{ $opportunity->eligibility_slug }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Word (no_space)
                        </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="word" name="word" value="{{ $opportunity->word }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Eligibility</label></div>
                            <div class="col-12 col-md-9"><textarea name="eligibility" id="elm1" rows="5" class="form-control">{{ $opportunity->eligibility }}</textarea required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Details</label></div>
                            <div class="col-12 col-md-9"><textarea name="detail" id="elm1" rows="5" class="form-control">{{ $opportunity->detail }}</textarea required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">About</label></div>
                            <div class="col-12 col-md-9"><textarea name="about" id="elm1" rows="5" class="form-control">{{ $opportunity->about }}</textarea required></div>
                    </div>  
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">How to Apply</label></div>
                            <div class="col-12 col-md-9"><textarea name="how_to_apply" id="elm1" rows="5" class="form-control">{{ $opportunity->how_to_apply }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Requirements</label></div>
                            <div class="col-12 col-md-9"><textarea name="requirements" id="elm1" rows="5" class="form-control">{{ $opportunity->requirements }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Note</label></div>
                            <div class="col-12 col-md-9"><textarea name="note" id="elm1" rows="5" class="form-control">{{ $opportunity->note }}</textarea required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9"><textarea name="status" id="elm1" rows="5" class="form-control">{{ $opportunity->status }}</textarea required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="img" name="img" class="form-control-file" value="{{ old('img') }} ">
                        <small class="form-text text-success">Only if you want to update the current image</small></div>
                        
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