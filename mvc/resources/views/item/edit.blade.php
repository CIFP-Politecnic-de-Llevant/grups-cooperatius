@extends('layouts.app')

@section('content')
    <h1>{{ isset($item) ? 'Editar Item' : 'Crear Item' }}</h1>
    <form action="{{ isset($item) ? route('item.update', $item->id) : route('item.store') }}" method="POST">
        @csrf
        @if(isset($item))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nom">Nom del Alumne:</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ isset($usuari) ? $usuari->nom : '' }}">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ isset($item) ? $item->tipo : '' }}">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{ isset($item) ? $item->valor : '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
