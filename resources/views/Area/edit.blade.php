@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Actualizar Área</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('Area.update', $areas->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Área</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $areas->name) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar Área
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
