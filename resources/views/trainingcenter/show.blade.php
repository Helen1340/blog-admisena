@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Detalles del Centro de Formación</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $trainingCenter->id }}</p>
            <p><strong>Nombre:</strong> {{ $trainingCenter->name }}</p>
            <p><strong>Ubicación:</strong> {{ $trainingCenter->location }}</p>
        </div>
    </div>

    <a href="{{ route('trainingcenter.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
