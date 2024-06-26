@extends('layouts.app')

@section('content')
    <h1>Listat de Alumnes</h1>
    <a href="{{route('usuari.create')}}" class="btn btn-primary">Crear Nou Alumne</a>
    <table class="table text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Cognoms</th>
            <th>Curs</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuaris as $usuari)
            <tr>
                <td>{{ $usuari->id }}</td>
                <td>{{ $usuari->nom }}</td>
                <td>{{$usuari->cognoms}}</td>
                <td>{{$usuari->curs->nom}}</td>
                <td>
                    <a href="{{ route('usuari.edit', $usuari->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('usuari.destroy', $usuari->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
