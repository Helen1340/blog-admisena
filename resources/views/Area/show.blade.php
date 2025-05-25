@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detalle del Área</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $areas->id }}</p>
            <p><strong>Nombre:</strong> {{ $areas->name }}</p>

            <a href="{{ route('area.index') }}" class="btn btn-secondary mt-3">Volver al listado</a>
        </div>
    </div>
</div>
@endsection
