@extends('admin.master.app')
@section('content')
    <!-- /.card -->
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">View Portfolio</h3><br>
            <a class="btn btn-app bg-success" href="{{ route('portfolio.add') }}"> Add Portfolio</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>url</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolio as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->url }}</td>
                            <td><img src="images/{{ $item->image }}" height="100" alt="noimage"></td>
                            <td>
                                <form action="{{ url('portfolio.destroy', $item->id) }}" method="post">
                                    <a href="{{ url('portfolio.edit', $item->id) }}" class="btn btn-app bg-info">
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
