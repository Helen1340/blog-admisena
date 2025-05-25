@extends('layouts.app')

@section('content')

<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Cursos</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Número del Curso</th>
                    <th scope="col">Día</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_number }}</td>
                    <td>{{ $course->day }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection