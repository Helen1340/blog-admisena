@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Centros de Formación</h1>

    <a href="{{ route('trainingcenter.create') }}" class="btn btn-success mb-3">Crear Centro</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainingCenters as $center)
                <tr>
                    <td>{{ $center->id }}</td>
                    <td>{{ $center->name }}</td>
                    <td>{{ $center->location }}</td>
                    <td>
                        <a href="{{ route('trainingcenter.show', $center->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('trainingcenter.edit', $center->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('trainingcenter.destroy', $center->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
