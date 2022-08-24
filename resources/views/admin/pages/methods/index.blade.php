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
                        <th>Title</th>
                        <th>details</th>
                        <th>icon</th>
                        <th>color</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($method as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td><i class="{{ $item->icon }}"></i></td>
                            <td style="background-color:{{ $item->color }}">{{ $item->color }}</td>
                            <td>
                                    <a href="{{ route('method.edit', $item->id) }}" class="btn btn-app bg-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
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
