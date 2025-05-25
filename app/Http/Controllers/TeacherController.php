<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){


        $teacher= teacher::all();
         return view('teacher.index', compact('teacher'));


    }

    public function create() {
        return view('teacher.create');

    }

    public function store(Request $request){

        $teacher = new teacher();
        $teacher->name = $request->name;
        $teacher->email= $request->email;

        $teacher->save();
        return $teacher;
    }
    public function show($id)
    {
        $teacher = teacher::find($id);
       
        return view('teacher.show', compact('teacher'));
    }

     //Destroy
     public function destroy (teacher $teacher){
        
        $teacher->delete();

        return redirect()->route('teacher.index');
    }

      public function edit(teacher $teacher){

        return view('teacher.edit',compact('teacher'));

      }

     //Update
    public function update(Request $request, teacher $teacher){

        $teacher->name = $request->name;
        $teacher->email= $request->email;
        $teacher->save();
    
        return redirect()->route('teacher.index');

      }



}


