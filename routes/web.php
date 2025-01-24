<?php

use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/todo',[TodoController::class,'index'])->name('todo');
Route::post('/todo',[TodoController::class,'store'])->name('todo.post');
Route::put('/todo/{id}',[TodoController::class,'update'])->name('todo.update');
Route::delete('/todo/{id}',[TodoController::class,'destroy'])->name('todo.delete');



