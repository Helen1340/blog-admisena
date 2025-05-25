@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Detalles del Instructor</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $teacher->id }}</p>
            <p><strong>Nombre:</strong> {{ $teacher->name }}</p>
            <p><strong>Correo:</strong> {{ $teacher->email }}</p>
        </div>
    </div>

    <a href="{{ route('teacher.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection
