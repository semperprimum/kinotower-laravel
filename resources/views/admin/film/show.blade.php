@extends('layout.admin')

@section('title', "О фильме: $film->name")

@section('content')

        <div class="row">
            <div class="col-3">
                <img style="max-height: 500px" src="{{ $film->link_img }}" alt="Постер: {{ $film->name }}">
                <a class="btn btn-warning mt-3" href="{{ route('films.index') }}">Обратно</a>
            </div>
            <div class="col">
                <ul>

                <div class="title text-bold"><h1>{{ $film->name }} {{ $film->age }}+</h1></div>
                    <li>
                        <div class="duration"><h5>Duration: {{ $film->duration }} min.</h5></div>
                    </li>
                    <li>
                         <div class="year"><h5>Year of Issue: {{ $film->year_of_issue }}</h5></div>
                    </li>
                </ul>
                    <div class="last-updated ml-4"><p>Last Updated: {{ $film->updated_at->diffForHumans() }}</p></div>
            </div>
        </div>

@endsection
