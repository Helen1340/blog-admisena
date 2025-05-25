<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    
    public function index(){

        $areas = Area::all();
        return view('Area.index', compact('areas'));

    }

    
    public function create() {

        return view('Area.create');

    }

    public function store(Request $request){

        $area = new Area();
        $area->name=$request->name;
        $area->save();
        return $area;

    }
    public function show($id)
    {
        $areas = Area::find($id);
       
        return view('Area.show', compact('areas'));
    }

     //Destroy
     public function destroy (Area $areas){
        
        $areas->delete();

        return redirect()->route('Area.index');
    }

      public function edit(Area $areas){

        return view('Area.edit',compact('areas'));

      }

     //Update
    public function update(Request $request, $area){

        $area->name = $request->name;
        $area->save();
    
        return redirect()->route('Area.index');

      }


}

