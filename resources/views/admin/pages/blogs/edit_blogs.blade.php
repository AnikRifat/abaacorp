@extends('admin.master.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Blogs</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> opps! operatioon un successfull</h5>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('admin/blogs/update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $blog->title }}" id="title">
            </div>
            <div class="form-group">
                <label for="detail">Enter Details</label>
                <textarea class="form-control" id="summernote8" name="detail" rows="3"
                  placeholder="Enter ...">{{ $blog->detail }}</textarea>
            </div>
            <div class="form-group">
                {{-- <img src="images/{{ $blog->image }}" height="100" alt=""> --}}
                <label for="image">change Image</label>
                <img src="{{ asset('') }}images/{{ $blog->image }}" height="100" alt="noimage">
                <div class="input-group">

                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection