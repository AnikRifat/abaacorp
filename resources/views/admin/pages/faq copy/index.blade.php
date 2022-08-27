@extends('admin.master.app')
@section('content')
<!-- /.card -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">View service</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ques</th>
                    <th>Answer</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faq as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->ques }}</td>
                    <td>{!! $item->ans !!}</td>
                    <td>
                        <form action="{{ route('faq.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('faq.edit', $item->id) }}" class="btn btn-app bg-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-app bg-danger">
                                <i class="fas fa-trash"></i>
                            </button>

                        </form>
                    </td>

                </tr>
                @endforeach



            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection