<?php

use Illuminate\Support\Facades\Route;

// web.php
use App\Http\Controllers\userModel;
use App\Http\Controllers\AnimalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', function () {
    return view('user');
});

Route::resource('users', UserController::class);

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'store']);

Route::get('/user', [AnimalController::class, 'index']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);