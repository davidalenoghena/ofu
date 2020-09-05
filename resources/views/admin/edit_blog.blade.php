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
                <strong>Edit Blog</strong>
            </div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            <div class="card-body card-block">
                <form action="{{ route('update.blog', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="blog_title" name="blog_title" value="{{ $blog->blog_title }}" class="form-control" required></div>
                    </div>
    
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Post</label></div>
                            <div class="col-12 col-md-9"><textarea name="blog_post" id="blog_post" rows="5" class="form-control">{{ $blog->blog_post }}</textarea required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Author</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="author" name="author" value="{{ $blog->author }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9">
                                <select name="category" id="category" class="form-control" value="{{ $blog->category }} ">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
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