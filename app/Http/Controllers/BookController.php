<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', [
            'books' => $books
        ]);
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
    

    public function create() 
    {
        return view('books.create');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $user = User::factory()->create();

        Book::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => $user->id,
        ]);

        return redirect()->route('books.index')->with('success', 'Livre créé avec succès!');
    }

    public function edit(Request $request, Book $book) 
    {
        return view('books.edit', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book) 
    {
        $book->update([
            'title' => $request->title,
        ]);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('danger', 'Le livre a bien été supprimé');
    }
}
