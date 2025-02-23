@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen m-0 flex-col">
        <h1 class="mt-10 text-xl text-black font-bold">Bienvenue dans ce projet de librairie interactive</h1>
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