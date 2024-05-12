@extends('layouts.app')

@section('content')
    <h1>{{ isset($usuari) ? 'Editar Alumne' : 'Crear Alumne' }}</h1>
    <form action="{{ isset($usuari) ? route('usuari.update', $usuari->id) : route('usuari.store') }}" method="POST">
        @csrf
        @if(isset($usuari))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nom">Nom del Alumne:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($usuari) ? $usuari->nom : '' }}">
        </div>
        <div class="form-group">
            <label for="cognoms">Cognoms del Alumne:</label>
            <input type="text" class="form-control" id="cognoms" name="cognoms" value="{{ isset($usuari) ? $usuari->cognoms : '' }}">
        </div>
        <div class="form-group">
            <label for="curs_id">Curs:</label>
            <select class="form-control" id="curs_id" name="curs_id">
                @foreach($cursos as $curs)
                    <option value="{{$curs->id}}" {{ isset($usuari) && $usuari->curs_id == $curs->id ? 'selected' : '' }}>
                        {{ $curs->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
