@extends('layouts.admin')

@section('content')

    <div>
        <h2>Detalle del articulo</h2>
        <label>id:</label>
        <p>{{ $article->id }}</p>
        <label>title:</label>
        <p>{{ $article->title }}</p>
        <label>body:</label>
        <p>{{ $article->body }}</p>
        <label>fecha de creacion:</label>
        <p>{{ $article->created_at }}</p>
        <label>usuario:</label>
        <p>{{ $user->username }}</p>

        <div>
            <a href="{{ route('articles.index') }}">Volver</a>
        </div>
    </div>

@endsection