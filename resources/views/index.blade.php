@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="flex justify-center items-center mt-20">
            <div class="bg-green-500 text-center text-black p-4 rounded-md shadow-md w-1/4">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="flex justify-center items-center text-center m-0 flex-col mt-[150px]">
        <h1 class="text-xl text-white font-bold">Bienvenue dans ce projet de librairie interactive</h1>
        <div class="flex justify-between gap-10">
            @auth
            <a href="{{ route('books.create') }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 hover:text-white mt-10 inline-block focus:outline-none focus:ring-2 focus:ring-zinc-900">
                Ajouter un livre
            </a>
            @endauth
            <a href="{{ route('books.index') }}" class="bg-gray-500 text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-700 hover:text-white mt-10 inline-block focus:outline-none focus:ring-2 focus:ring-zinc-900">
                Liste des livres
            </a>
        </div>
    </div>
@endsection