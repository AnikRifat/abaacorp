@extends('admin.master.app')
@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">View Blogs</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->detail }}</td>
                    <td><img src="{{ asset('') }}images/{{ $item->image }}" height="100" alt="noimage"></td>
                    <td>
                        <form action="{{ url('admin/blogs/destroy', $item->id) }}" method="post">
                            <a href="{{ url('admin/blogs/edit', $item->id) }}" class="btn btn-app bg-info">
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