@extends('layout.admin')

@section('title', isset($category) ? "Изменение жанра: " . $category->name : "Добавление жанра")

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="post">
                        @csrf
                        @isset($category)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{ old('name', isset($category) ? $category->name : "") }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select name="parent_id" class="form-control">
                                <option value="">No Parent Category</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}" @selected(old('parent_id', isset($category) ? $category->parent_id : "") == $item->id)>{{ $item->name }}</option>
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
