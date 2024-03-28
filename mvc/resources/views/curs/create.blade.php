@extends('layouts.app')

@section('content')
    <h1>Crear Nou Curs</h1>
    <form action="{{ route('curs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nom del Curs:</label>
            <input type="text" class="form-control" id="nombre" name="nom">
        </div>
        <button type="submit" class="btn btn-primary">Desa</button>
    </form>
@endsection
