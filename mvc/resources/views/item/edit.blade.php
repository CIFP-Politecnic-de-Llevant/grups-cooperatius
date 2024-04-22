@extends('layouts.app')

@section('content')
    <h1>{{ isset($item) ? 'Editar Item' : 'Crear Item' }}</h1>
    <form action="{{ isset($item) ? route('item.update', $item->id) : route('item.store') }}" method="POST">
        @csrf
        @if(isset($item))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="usuari_id">Nom del Alumne:</label>
            <select class="form-control" id="usuari_id" name="usuari_id">
                <option value="">
                    Selecciona un nombre
                </option>
                @foreach($usuaris as $usuari)
                    <optgroup label="{{$usuari->curs->nom}}">
                        <option value="{{$usuari->id}}" {{ isset($usuari_id) && $usuari_id == $usuari->id ? 'selected' : '' }}>
                            {{$usuari->nom}}
                        </option>
                    </optgroup>
                @endforeach
            </select>
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
