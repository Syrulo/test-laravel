@extends('app')

@section('content')
<div class="fixed top-0 left-0 w-full p-4 flex z-50 bg-gray-500">
        <div class="text-neutral-800 font-bold px-10 py-2 sm:w-auto">
            Accueil
        </div>
    </div>
    <div class="flex justify-center items-center h-screen m-0 flex-col">
        <h1 class="mt-10 text-xl">Bienvenue dans ce projet de librairie interactive</h1>
        <div class="flex justify-between gap-10">
            <a href="{{ route('books.create') }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 mt-10 inline-block focus:outline-none focus:ring-2 focus:ring-zinc-900">
                Ajouter un livre
            </a>
            <a href="{{ route('books.index') }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 mt-10 inline-block focus:outline-none focus:ring-2 focus:ring-zinc-900">
                Liste des livres
            </a>
        </div>
    </div>
@endsection