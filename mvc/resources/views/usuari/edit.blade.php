@extends('layouts.app')

@section('content')
    <h1>{{ isset($usuaris) ? 'Editar Alumne' : 'Crear Alumne' }}</h1>
    <form action="{{ isset($usuaris) ? route('usuari.update', $usuaris->id) : route('usuari.store') }}" method="POST">
        @csrf
        @if(isset($usuaris))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nom">Nom del Alumne:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($usuaris) ? $usuaris->nom : '' }}">
        </div>
        <div class="form-group">
            <label for="cognoms">Cognoms del Alumne:</label>
            <input type="text" class="form-control" id="cognoms" name="cognoms" value="{{ isset($usuaris) ? $usuaris->cognoms : '' }}">
        </div>
        <div class="form-group">
            <label for="curs_id">Curs:</label>
            <select class="form-control" id="curs_id" name="curs_id">
                @foreach($cursos as $curs)
                    <option value="{{ isset($usuaris) && $usuaris->curs_id == $curs->id ? 'selected' : '' }}">
                        {{ $curs->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
