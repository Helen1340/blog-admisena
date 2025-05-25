@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Listado de Aprendices</h1>

    <a href="{{ route('apprentice.create') }}" class="btn btn-primary mb-3">Crear Aprendiz</a>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice->id }}</td>
                <td>{{ $apprentice->name }}</td>
                <td>{{ $apprentice->email }}</td>
                <td>{{ $apprentice->cell_number }}</td>
                <td>
                    <a href="{{ route('apprentice.show', $apprentice->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('apprentice.edit', $apprentice->id) }}" class="btn btn-success btn-sm">Editar</a>
                    <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Seguro que quieres eliminar este aprendiz?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
