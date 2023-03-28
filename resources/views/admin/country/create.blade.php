@extends('layout.admin')

@section('title', isset($country) ? "Изменение страны: " . $country->name : "Добавление страны")

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($country) ? route('countries.update', $country->id) : route('countries.store') }}" method="post">
                        @csrf
                        @isset($country)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{ old('name', isset($country) ? $country->name : "") }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
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
