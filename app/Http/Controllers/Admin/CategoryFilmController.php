<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFilmRequest;
use App\Models\Category;
use App\Models\CategoryFilm;
use App\Models\Film;
use Illuminate\Http\Request;

class CategoryFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categriesfilm = CategoryFilm::all();

        return view('admin.categoryfilm.index', compact('categriesfilm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $films = Film::all();

        return view('admin.categoryfilm.create', compact('films', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryFilmRequest $request)
    {
        CategoryFilm::create($request->validated());

        return redirect(route('categoryfilms.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryFilm $categoryfilm)
    {
        $categoryfilm->delete();

        return redirect(route('categoryfilms.index'));
    }
}
