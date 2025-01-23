<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\PutAuthorRequest;

class AuthorController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view("author.index", compact(var_name: "authors"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("author.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PutAuthorRequest $request)
    {
        Author::create($request->validated());
        return redirect()->route('authors.index')
            ->with('success', 'Author created!');
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
    public function edit(Author $author)
    {
        return view('author.create', compact( 'author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return redirect()->route(route: 'authors.index')->with('success','Author updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route(route: 'authors.index')->with('success', 'Author deleted!');
    }
}
