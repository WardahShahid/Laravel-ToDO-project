<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class,'index']);
Route::get('/tasks', [TaskController::class,'index']);
Route::post('/tasks', [TaskController::class,'store']);

Route::get('/tasks/create',[TaskController::class,'create']
);

Route::patch('/tasks/{id}',[TaskController::class,'update']);
Route::delete('/tasks/{id}',[TaskController::class,'delete']);