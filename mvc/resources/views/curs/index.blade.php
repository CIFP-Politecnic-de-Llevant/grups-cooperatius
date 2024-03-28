@extends('layouts.app')

@section('content')
    <h1>Listado de Cursos</h1>
    <a href="{{ route('curs.create') }}" class="btn btn-primary">Crear Nuevo Curso</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($curs as $cur)
            <tr>
                <td>{{ $cur->id }}</td>
                <td>{{ $cur->nom }}</td>
                <td>
                    <a href="{{ route('curs.edit', $cur->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('curs.destroy', $cur->id) }}" method="POST">
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