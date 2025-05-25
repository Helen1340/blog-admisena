<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('computers', [ComputerController::class,'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers', [ComputerController::class, 'store'])->name('computer.store'); 
Route::get('computers/{computer}/edit', [ComputerController::class, 'edit'])->name('computer.edit');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computers/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computers/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');


Route::get('trainingCenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingCenters/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingCenters', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingCenters/{trainingCenter}', [TrainingCenterController::class, 'show'])->name('trainingcenter.show');
Route::get('trainingCenters/{trainingCenter}/editar', [TrainingCenterController::class, 'edit'])->name('trainingcenter.edit');
Route::put('trainingCenters/{trainingCenter}', [TrainingCenterController::class, 'update'])->name('trainingcenter.update');
Route::delete('trainingCenters/{trainingCenter}', [TrainingCenterController::class, 'destroy'])->name('trainingcenter.destroy');

 //la variable de las llaves es el id ej: {trainingCenters}//

 Route::get('areas', [AreaController::class, 'index'])->name('area.index');
 Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
 Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
 Route::put('areas/{areas}', [AreaController::class, 'update'])->name('area.update');
 Route::delete('areas/{areas}', [AreaController::class, 'destroy'])->name('area.destroy');
 Route::get('areas/{areas}/editar', [AreaController::class, 'edit'])->name('area.edit');
 Route::get('areas/{areas}', [AreaController::class, 'show'])->name('area.show');
 



Route::get('apprentices', [ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentices/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::put('apprentices/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::delete('apprentices/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');
Route::get('apprentices/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');


Route::get('course', [CourseController::class,'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/{course}/edit', [CourseController::class,'edit'])->name('course.edit');
Route::put('course/{course}', [CourseController::class,'update'])->name('course.update');
Route::delete('course/{course}', [CourseController::class,'destroy'])->name('course.destroy');


Route::get('teacher', [TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
