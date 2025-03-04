<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $genres = Genre::all();
        
        return view('books.create', compact('genres'));
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'genre_id' => 'required|exists:genres,id'
        ]);
    
    if (auth::check()) {
        $user = auth::user();
    } else {
        $user = User::factory()->create();
    }

    $book = Book::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => $user->id,
            'genre_id' => $validated['genre_id'] ?? null,
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
