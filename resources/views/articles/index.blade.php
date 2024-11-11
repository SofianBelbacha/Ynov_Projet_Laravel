@extends('layouts.layout')

@section('title', 'Liste des Articles')

@section('content')
<h1>Articles</h1>
<a href="{{ route('articles.create') }}">Créer un nouvel article</a>
<ul>
    @foreach ($articles as $article)
        <li>
            <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a>
            <a href="{{ route('articles.edit', $article) }}">Modifier</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
