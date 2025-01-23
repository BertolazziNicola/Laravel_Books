<?php

namespace App\Http\Controllers;

use App\Http\Requests\PutBookRequest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
class BookController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view("book.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view("book.create", compact("authors", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PutBookRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('cover')) {
            // Make the resize
            $cover = $request->file('cover');

            $extension = $cover->getClientOriginalExtension(); //.jpg, .png, .jpeg, ecc.

            $manager = new ImageManager(new Driver());
            $image = $manager->read($cover);

            $image->resize(400, 520);

            $coverPath = 'covers\\' . uniqid() . '.' . $extension;

            $image->save(storage_path('app\public\\' . $coverPath));
            $validatedData['cover'] = $coverPath;
        }

        Book::create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);

        // Check if book exists
        if(!$book)
        {
            return abort(404);
        }

        return view('book.details', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view("book.edit", compact("authors", "categories", "book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return redirect()->route('books.index')->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route(route: 'books.index')->with('success','Book deleted!');
    }
}
