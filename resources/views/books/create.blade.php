@extends('layouts.app')

@section('content')

    <div class="flex justify-center items-center h-screen m-0 flex-col">
        <form action="{{ route('books.store') }}" method="POST" class="w-96">
            @csrf
            <label for="title" class="block text-white text-xl font-semibold mb-2">Titre de votre livre :</label>
            <input class="text-black px-4 py-2 border border-gray-300 rounded-lg w-full mb-4" type="text" name="title" required>
            <label for="content" class="block text-white text-xl font-semibold mb-2">Contenu :</label>
            <textarea class="text-black px-4 py-2 border border-gray-300 rounded-lg w-full mb-4 h-48 resize-none" name="content" required></textarea>
                <button class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900" type="submit">
                    Créer
                </button>
        </form>
    </div>
@endsection