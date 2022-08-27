@extends('admin.master.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit method</h3>
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
    <form action="{{ route('method.update', $method->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $method->title }}" id="title">
            </div>
            <div class="form-group">
                <label for="description">Enter description</label>
                <textarea class="form-control" id="summernote4" name="description" rows="3"
                  placeholder="Enter ...">{{ $method->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="color">color</label>
                <input type="color" class="form-control" name="color" value="{{ $method->color }}" id="color">
            </div>
            <div class="form-group">
                <label for="icon">Icon</label>
                <small><a href="https://fontawesome.com/v5/search">Font awesome </a></small>
                <input type="text" class="form-control" name="icon" value="{{ $method->icon }}" id="icon">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection