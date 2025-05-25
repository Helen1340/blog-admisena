@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Aprendiz</h2>

    <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $apprentice->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $apprentice->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="cell_number" class="form-label">Número celular</label>
            <input type="text" id="cell_number" name="cell_number" class="form-control" value="{{ old('cell_number', $apprentice->cell_number) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('apprentice.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
