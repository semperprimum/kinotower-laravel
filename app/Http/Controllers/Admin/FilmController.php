<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilmRequest;
use App\Models\Category;
use App\Models\CategoryFilm;
use App\Models\Country;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();

        return view('admin.film.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();

        return view('admin.film.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilmRequest $request)
    {
        Film::create($request->validated());

        return redirect(route('films.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        $categoriesfilm = CategoryFilm::all();
        return view('admin.film.show', compact('film', 'categoriesfilm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $countries = Country::all();

        return view('admin.film.create', compact('countries', 'film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilmRequest $request, Film $film)
    {
        $film->update($request->validated());

        return redirect(route('films.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect(route('films.index'));
    }
}
