@extends('layout.admin')

@section('title', "Список жанров")

@section('content')
    <div class="row justify-content-end">
        <div class="col-2">
            <a href="{{ route('categories.create') }}" class="btn btn-block btn-outline-success btn-lg mb-4">Добавить</a>
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
                            <th>Parent Category</th>
                            <th class="w-25">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                        <tr>
                                <td>{{ $loop->index + 1 }}</td>
                             <td>   <a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></td>
                            <td>{{ isset($category->parentCategory) ? $category->parentCategory->name : "No parent category" }}</td>
                            <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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

<?php
?>
