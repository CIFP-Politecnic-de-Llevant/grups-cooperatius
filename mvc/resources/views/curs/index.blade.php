@extends('layouts.app')

@section('content')
    <h1>Listat de Cursos</h1>
    <a href="{{ route('curs.create') }}" class="btn btn-primary">Crear Nou Curs</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $curs)
            <tr>
                <td>{{ $curs->id }}</td>
                <td>{{ $curs->nom }}</td>
                <td>
                    <a href="{{ route('curs.edit', $curs->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('curs.destroy', $curs->id) }}" method="POST">
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
