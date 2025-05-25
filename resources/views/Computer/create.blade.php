@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Formulario de Computadores

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('computer.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input type="number" id="number" name="number" class="form-control" value="{{ old('number') }}" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text" id="brand" name="brand" class="form-control" value="{{ old('brand') }}" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Guardar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
