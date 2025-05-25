@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Centro de Formación</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('trainingcenter.update', $trainingCenter->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $trainingCenter->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="location" class="form-label">Ubicación</label>
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $trainingCenter->location) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar Centro
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
