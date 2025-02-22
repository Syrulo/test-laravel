<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::view('/', 'index')->name('home');

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::get('/books/edit/{book}', [BookController::class, 'edit'])->name('books.edit');

Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');