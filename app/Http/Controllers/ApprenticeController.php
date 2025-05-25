<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));
    }

    public function create()
    {
        return view('apprentice.create');
    }

    public function store(Request $request)
    {
    $apprentice = new Apprentice();
    $apprentice->name = $request->name;
    $apprentice->email = $request->email;
    $apprentice->cell_number = $request->cell_number;

    $apprentice->save();
     return $apprentice;
   
}
public function show($id)
{
    $apprentice= Apprentice::find($id);
   
    return view('apprentice.show', compact('apprentice'));
}

 //Destroy
 public function destroy (Apprentice $apprentice){
    
    $apprentice->delete();

    return redirect()->route('apprentice.index');
}

  public function edit(Apprentice $apprentice){

    return view('apprentice.edit',compact('apprentice'));

  }

 //Update
public function update(Request $request, Apprentice $apprentice){

    $apprentice->name = $request->name;
    $apprentice->email = $request->email;
    $apprentice->cell_number = $request->cell_number;
    $apprentice->save();

    return redirect()->route('apprentice.index');

  }


}
