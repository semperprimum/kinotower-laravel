@extends('layout.admin')

@section('title', "Жанры фильма: ")

@section('content')
    <div class="row justify-content-end">
        <div class="col-2">
            <a href="{{ route('categoryfilms.create') }}" class="btn btn-block btn-outline-success btn-lg mb-4">Добавить</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th class="w-25">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categriesfilm as $categoryfilm)
                            <tr>
                                <td>{{ $categoryfilm->id }}</td>
                                <td>{{ $categoryfilm->parentFilm->name }}</td>
                                <td>{{ $categoryfilm->parentCategory->name }}</td>
                                <td>
                                    <form action="{{ route('categoryfilms.destroy', $categoryfilm->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-block btn-outline-danger btn-md">Delete</button>
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
        </div>
    </div>
    </div>
@endsection
