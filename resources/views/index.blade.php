@extends('app')

@section('content')
    <h1>Hello World</h1>
    <a href="{{ route('books.create') }}">Créer un article</a>
@endsection