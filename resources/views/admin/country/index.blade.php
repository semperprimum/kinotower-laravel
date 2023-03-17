@extends('layout.admin')

@section('title', "Список стран")

@section('content')
    <div class="row justify-content-end">
        <div class="col-2">
            <a href="{{ route('countries.create') }}" class="btn btn-block btn-outline-success btn-lg mb-4">Добавить</a>
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
                            <th class="w-25">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($countries as $country)
                        <tr>
                                <td>{{ $country->id }}</td>
                                <td>{{ $country->name }}</td>
                            <td>
                            <form action="{{ route('countries.destroy', $country->id) }}" method="post">
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
