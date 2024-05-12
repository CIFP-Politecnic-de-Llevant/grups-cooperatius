@extends('layouts.app')

@section('content')
    <h1>Listat de items</h1>
    <a href="{{route('item.create')}}" class="btn btn-primary">Crear Nou Item</a>
    <table class="table">
        <thead>
        <tr>
            <th>NOM</th>
            <th>TIPO</th>
            <th>VALOR</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->usuari->nom }}</td>
                <td>{{ $item->tipo }}</td>
                <td>{{$item->valor}}</td>
                <td>
                    <a href="{{ route('item.edit', $usuari->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('item.destroy', $usuari->id) }}" method="POST">
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
