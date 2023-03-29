@extends('layout.admin')

@section('title', isset($film) ? "Изменение фильма: " . $film->name : "Добавление фильма")

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($film) ? route('films.update', $film->id) : route('films.store') }}" method="post">
                        @csrf
                        @isset($film)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{ old('name', isset($film) ? $film->name : "") }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country_id" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" @selected(old('country_id', isset($film) ? $film->country_id : "") == $country->id)>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Duration</label>
                            <input type="text" value="{{ old('duration', isset($film) ? $film->duration : "") }}" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration">
                            @error('duration')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Year of Issue</label>
                            <input type="text" value="{{ old('year_of_issue', isset($film) ? $film->year_of_issue : "") }}" class="form-control @error('year_of_issue') is-invalid @enderror" id="year_of_issue" name="year_of_issue">
                            @error('year_of_issue')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age Restriction</label>
                            <input type="text" value="{{ old('age', isset($film) ? $film->age : "") }}" class="form-control @error('age') is-invalid @enderror" id="age" name="age">
                            @error('age')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image Link</label>
                            <input type="text" value="{{ old('link_img', isset($film) ? $film->link_img : "") }}" class="form-control @error('link_img') is-invalid @enderror" id="link_img" name="link_img">
                            @error('link_img')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kinopoisk Link</label>
                            <input type="text" value="{{ old('link_kinopoisk', isset($film) ? $film->link_kinopoisk : "") }}" class="form-control @error('link_kinopoisk') is-invalid @enderror" id="link_kinopoisk" name="link_kinopoisk">
                            @error('link_kinopoisk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Video Link</label>
                            <input type="text" value="{{ old('link_video', isset($film) ? $film->link_video : "") }}" class="form-control @error('link_video') is-invalid @enderror" id="link_video" name="link_video">
                            @error('link_video')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-2 justify-content-end">
                            <button type="submit" class="btn btn-block btn-outline-success btn-lg mb-4">
                                @if(isset($film))
                                    Изменить
                                @else
                                    Добавить
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

@endsection
