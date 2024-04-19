@extends('layouts.app')

@section('content')
    <h1>{{ isset($curs) ? 'Editar Curso' : 'Crear Curso' }}</h1>
    <form action="{{ isset($curs) ? route('curs.update', $curs->id) : route('curs.store') }}" method="POST">
        @csrf
        @if(isset($curs))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nom del Curso:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($curs) ? $curs->nom : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
