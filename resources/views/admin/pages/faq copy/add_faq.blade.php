@extends('admin.master.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Faq</h3>
    </div>


<form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Enter Question</label>
            <input type="text" class="form-control" name="ques" id="ques" placeholder="Enter ques">
        </div>
        <div class="form-group">
            <label for="detail">Enter Answer</label>
            <textarea class="form-control" id="summernote4" name="ans" placeholder="Enter ..."></textarea>
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
@endsection