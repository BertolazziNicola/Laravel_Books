<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::get("/", [BookController::class, "index"])->name("book.index");

Route::resource("authors", AuthorController::class);
Route::resource("books", BookController::class);
Route::resource("categories", CategoryController::class);
