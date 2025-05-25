<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('Computer.index', compact('computers'));
    }

    public function create()
    {
        return view('Computer.create');
    }

    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index'); 
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return view('Computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('Computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
