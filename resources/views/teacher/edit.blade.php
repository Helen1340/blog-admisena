@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Instructor</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar Instructor
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
