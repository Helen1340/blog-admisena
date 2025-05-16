<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;


Route::get('computers', [ComputerController::class,'index'])->name('computer.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('Computer.create');
Route::post('computer/store', [ComputerController::class, 'store'])->name('Computer.store');


Route::get('trainingCenters', [TrainingCenterController::class, 'index'])->name('TrainingCenter.index');
Route::get('trainingCenter/create', [TrainingCenterController::class, 'create'])->name('TrainigCenter.create');
Route::post('trainingCenter/store', [TrainingCenterController::class, 'store'])->name('TrainigCenter.store');


Route::get('areas', [AreaController::class,'index'])->name('area.index');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');


