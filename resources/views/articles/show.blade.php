@extends('layouts.layout')

@section('content')
<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="{{ route('articles.edit', $article) }}">Modifier</a>
<a href="{{ route('articles.index') }}">Retour à la liste</a>
@endsection
