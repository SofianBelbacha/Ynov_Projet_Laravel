@extends('layouts.layout')

@section('content')
<h1>Modifier l'article</h1>
<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $article->title }}" required>
    <textarea name="content" required>{{ $article->content }}</textarea>
    <button type="submit">Mettre à jour</button>
</form>
@endsection
