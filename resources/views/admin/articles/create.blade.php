@extends('layouts.admin')

@section('content')

    <div>
        <form action="{{ route('articles.store') }}" method="POST">
            {{ csrf_field() }}

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="body">Body:</label>
            <input type="text" id="body" name="body" required>

            <button type="submit">Guardar</button>
            <a href="{{ route('articles.index') }}">Cancelar</a>
        </form>
    </div>

@endsection