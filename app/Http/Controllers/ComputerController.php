<?php

namespace App\Http\Controllers;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index(){


        $computer= Computer::all();
         
        return view('Computer.index', compact('computers'));

    }

    public function create() {
        
        return view('Computer.create');

    }

    public function store(Request $request){

        $computer = new Computer();

        $computer->name=$request->name;
      
        $computer->save();
        
        return $computer;

    }
    
}
