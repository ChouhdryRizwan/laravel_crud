<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\UserController;
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


//admin routes
Route::get('/saveUser',[UserController::class,'userRegister']);
Route::post('/saveUserdata',[UserController::class,'saveUserData']);
Route::get('/loginUser',[UserController::class,'loginUser']);
Route::post('/login',[UserController::class,'login']);

//send mail
Route::get('/email',[UserController::class,'sendEmail']);
