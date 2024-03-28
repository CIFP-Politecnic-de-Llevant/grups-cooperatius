@extends('layouts.app')

@section('content')
    <h1>Editar Curs</h1>
    <form action="{{ route('curs.update', $curs->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nom del Curs:</label>
            <input type="text" class="form-control" id="nombre" name="nom" value="{{ $curs->nom }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualitzar</button>
    </form>
@endsection
