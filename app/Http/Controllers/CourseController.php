<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){


        $course= course::all();
         return view('course.index', compact('course'));


    }

    public function create() {
        return view('course.create');

    }

    public function store(Request $request){

        $course = new course();
        $course->course_number = $request->course_number;
        $course->day = $request->day;

        $course->save();
        return $course;
    }
    public function show($id)
    {
        $course= course::find($id);
       
        return view('course.show', compact('course'));
    }

     //Destroy
     public function destroy (course $course){
        
        $course->delete();

        return redirect()->route('course.index');
    }

      public function edit(course $course){

        return view('course.edit',compact('course'));

      }

     //Update
    public function update(Request $request, course $course){

        $course->course_number = $request->course_number;
        $course->day = $request->day;
    
        return redirect()->route('course.index');

      }


}

