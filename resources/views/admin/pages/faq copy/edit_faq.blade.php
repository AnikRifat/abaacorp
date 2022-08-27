@extends('admin.master.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit service</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="ques">Question</label>
                <input type="text" class="form-control" name="ques" value="{{ $faq->ques }}" id="ques">
            </div>
            <div class="form-group">
                <label for="ans">Enter Ans</label>
                <textarea class="form-control" id="ans" name="ans" rows="3"
                  placeholder="Enter ...">{{ $faq->ans }}</textarea>
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection