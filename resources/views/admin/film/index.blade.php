@extends('layout.admin')

@section('title', "Список фильмов")

@section('content')
    <div class="row justify-content-end">
        <div class="col-2">
            <a href="{{ route('films.create') }}" class="btn btn-block btn-outline-success btn-lg mb-4">Добавить</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-5">
            @foreach($films as $film)
        <div class="col mb-4">
            <div class="card">
                <img src="{{ $film->link_img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-title text-xl d-flex justify-content-between">
                        <p class="mr-3">{{ $film->name }} <span class="text-red">{{ $film->age }}+</span></p>
                        <a href="{{ route('films.edit', $film->id) }}"><i class="fas fa-edit fa-xs"></i></a>
                    </div>
                    <p class="card-text">Продолжительность: {{ $film->duration }} мин.</p>
                    <p class="card-text">Год: {{ $film->year_of_issue }}</p>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{ route('films.show', $film->id) }}" class="btn btn-info mr-3">Подробнее</a>
                    <form action="{{ route('films.destroy', $film->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            href="{{ route('films.destroy', $film->id) }}"
                            class="btn btn-outline-danger"
                            >Удалить
                        </button>
                    </form>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
