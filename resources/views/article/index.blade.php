@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article) }}">
                {{$article->name}}
            </a>
        </h2>
    @endforeach
    {{$articles->links()}}
@endsection

