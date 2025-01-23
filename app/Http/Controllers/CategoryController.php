<?php

namespace App\Http\Controllers;

use App\Http\Requests\PutCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("category.index", compact(var_name: "categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PutCategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')
            ->with('success', 'Category created!');
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
    public function edit(Category $category)
    {
        return view('category.create', compact( 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route(route: 'categories.index')->with('success','Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route(route: 'categories.index')->with('success','Category deleted!');
    }
}
