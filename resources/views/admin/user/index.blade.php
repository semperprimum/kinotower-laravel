@extends('layout.admin')

@section('title', "Список пользователей")

@section('content')
    <div class="row justify-content-end">
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
                            <th>Full Name</th>
                            <th>Birthday</th>
                            <th>Gender Name</th>
                            <th>E-mail</th>
                            <th class="w-25">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                        <tr>
                                <td>{{ $user->id }}</td>
                            <td> {{ $user->fio }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->gender->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
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

