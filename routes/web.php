<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userModel;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', [AnimalController::class, 'index']);

Route::resource('users', UserController::class);

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'store']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

Route::put('/animals/{id}', [AnimalController::class, 'update']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', function () {
    return view('login');
});

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/admin', [AuthController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::put('/animals/{id}/accept', [AnimalController::class, 'accept']);
Route::delete('/animals/{id}/reject', [AnimalController::class, 'reject']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');