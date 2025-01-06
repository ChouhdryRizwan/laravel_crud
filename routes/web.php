<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

// Route::get('/shw', function () {
//     return view('welcome');
// });

Route::get('/', [studentController::class, 'showData']);

Route::get('/register',[studentController::class,'register']);
Route::post('/save',[studentController::class,'saveData']);
Route::get('/edit/{id}', [studentController::class, 'editform']);
Route::post('/update/{id}', [studentController::class, 'updateData']);
Route::get('/delete/{id}', [studentController::class, 'deleteData']);

