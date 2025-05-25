@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Actualizar Curso</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('course.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="course_number" class="form-label">Número del Curso</label>
                    <input type="text" id="course_number" name="course_number" class="form-control"
                        value="{{ old('course_number', $course->course_number ?? '') }}" required>
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Día</label>
                    <input type="text" id="day" name="day" class="form-control"
                        value="{{ old('day', $course->day ?? '') }}">
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar Curso
                </button>
            </form>
        </div>
    </div>
</div>
@endsection