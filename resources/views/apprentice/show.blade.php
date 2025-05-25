@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalles del Aprendiz</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $apprentice->id }}</li>
        <li class="list-group-item"><strong>Nombre:</strong> {{ $apprentice->name }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $apprentice->email }}</li>
        <li class="list-group-item"><strong>Celular:</strong> {{ $apprentice->cell_number }}</li>
    </ul>

    <a href="{{ route('apprentice.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
</div>
@endsection
