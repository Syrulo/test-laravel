@extends('layouts.app')

@section('content')

<div class="mt-20 sm:mt-24 md:mt-28 lg:mt-16 xl:mt-8 min-h-screen overflow-y-auto">
    <div class="flex justify-center items-center min-h-screen m-0 flex-col">
        @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div> 
        @endif
        @if(session('danger'))
        <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
            {{ session('danger') }}
        </div> 
        @endif
        <h1 class="text-xl text-white">Liste des livres</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 w-full p-8">
            @foreach ($books as $book)
                <div class="border p-4 rounded-lg bg-slate-400 shadow-md hover:shadow-lg flex flex-col h-full">
                    <p class="font-semibold text-lg text-center text-black flex-grow">
                        {{ $book->title }}<br>
                        <span class="text-sm">: de {{ $book->user->name }}</span><br>
                        <span class="text-sm">Catégorie : 
                            @if ($book->genre)
                                {{ $book->genre->name }}
                            @else
                                Aucune catégorie
                            @endif
                        </span>
                    </p>
                    <div class="flex flex-wrap justify-evenly gap-4 w-full mt-auto pt-4">
                        <a href="{{ route('books.show', $book) }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 flex items-center justify-center sm:w-auto">
                            <x-heroicon-s-book-open class="h-6 w-6 text-gray-800"/>
                        </a>
                        @auth
                        <a href="{{ route('books.edit', $book) }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 flex items-center justify-center sm:w-auto">
                            <x-heroicon-s-pencil-square class="h-6 w-6 text-gray-800"/>
                        </a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="w-auto sm:w-auto">
                            @csrf
                            @method('DELETE')
                            <button class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 flex items-center justify-center sm:w-auto" type="submit">
                                <x-heroicon-s-trash class="h-6 w-6 text-gray-800"/>
                            </button>
                        </form>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
