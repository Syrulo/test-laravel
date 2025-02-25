@extends('layouts.app')

@section('content')

<div class="sm:pt-25 md:pt-15">
    <div class="flex justify-center items-center min-h-screen m-0 flex-col">
        <h1 class="text-white text-2xl sm:text-3xl font-semibold text-center mb-4">
            {{ isset($book) ? $book->title : 'Aucun livre trouvé' }}
        </h1>
        <article class="max-w-2xl text-center px-4 py-6 text-white rounded-lg shadow-md">{{ $book->content ?? 'Pas de contenu disponible' }}</article>
    </div>
</div>

@endsection