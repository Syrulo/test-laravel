@extends('layouts.app')
@section('content')

    <div class="flex justify-center items-center h-screen m-0 flex-col">
        <form action="{{ route('books.update', $book) }}" method="POST" class="w-96">
            @csrf
            @method('PUT')
            <label for="title" class="block text-white text-xl font-semibold mb-2">Modifier le titre :</label>
            <input type="text" class="text-black px-4 py-2 border border-gray-300 rounded-lg w-full mb-4" name="title" value="{{ $book->title }}">
                <button class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900" type="submit">
                    Editer
                </button>
        </form>
    </div>
@endsection