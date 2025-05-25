<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    // Mostrar listado de centros de formación
    public function index()
    {
        $trainingCenters = TrainingCenter::all();
        return view('trainingcenter.index', compact('trainingCenters'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('trainingcenter.create');
    }

    // Guardar nuevo centro de formación
    public function store(Request $request)
    {
        $trainingCenter = new TrainingCenter();
        $trainingCenter->name = $request->name;
        $trainingCenter->location = $request->location;
        $trainingCenter->save();

        return redirect()->route('trainingcenter.index');
    }

    // Mostrar detalles de un centro de formación
    public function show(TrainingCenter $trainingCenter) // <- Cambio aquí
    {
        return view('trainingcenter.show', compact('trainingCenter'));
    }

    // Mostrar formulario de edición
    public function edit(TrainingCenter $trainingCenter)
    {
        return view('trainingcenter.edit', compact('trainingCenter'));
    }

    // Actualizar datos del centro de formación
    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        $trainingCenter->name = $request->name;
        $trainingCenter->location = $request->location;
        $trainingCenter->save();

        return redirect()->route('trainingcenter.index');
    }

    // Eliminar un centro de formación
    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();
        return redirect()->route('trainingcenter.index');
    }
}
