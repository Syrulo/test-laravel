@extends('layouts.app')

@section('content')

<div class="pt-20 sm:pt-25 md:pt-15">
    <div class="flex justify-center items-center min-h-screen m-0 flex-col">
        <h1 class="mt-10 text-xl">Liste des livres</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 w-full p-8">
            @foreach ($books as $book)
                <div class="border p-4 rounded-lg bg-slate-400 shadow-md hover:shadow-lg flex flex-col h-full">
                    <p class="font-semibold text-lg text-black flex-grow">
                        {{ $book->title }}<br>
                        <span class="text-sm">: de {{ $book->user->name }}</span>
                    </p>
                    <div class="flex flex-wrap justify-between items-center w-full mt-auto gap-4 text-center">
                        <a href="{{ route('books.edit', $book) }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 w-full sm:w-auto">
                            Editer
                        </a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="w-full sm:w-auto">
                            @csrf
                            @method('DELETE')
                            <button class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 w-full sm:w-auto" type="submit">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
