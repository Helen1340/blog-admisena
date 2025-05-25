@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Actualizar Computador</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $computer->number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $computer->brand) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar Categoría
                </button>
            </form>
        </div>
    </div>
</div>
@endsection