@extends('layout.admin')

@section('title', "Добавление жанра")

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categoryfilms.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Movie Name</label>
                            <select name="film_id" class="form-control">
                                @foreach($films as $film)
                                    <option value="{{ $film->id }}" >{{ $film->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Movie Name</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <div class="col-2 justify-content-end">
                                <button type="submit" class="btn btn-block btn-outline-success btn-lg mb-4">Добавить</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
