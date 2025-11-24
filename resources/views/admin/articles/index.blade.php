@extends('layouts.admin')

@section('content')

    <a href="#">Agregar</a>

    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->body }}</td>
                    <td>
                        <a href="#">Ver</a>
                        <a href="#">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection