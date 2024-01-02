<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('index');
});

Route::get('/pemain', function () {
    return view('dashboard.pemain');
});
Route::get('/rekammedis', function () {
    return view('dashboard.rekammedis');
});
Route::get('/rumahsakit', function () {
    return view('dashboard.rumahsakit');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/pemain', [DashboardController::class, 'pemain']);
Route::get('/rekammedis', [DashboardController::class, 'rekammedis']);
Route::get('/rumahsakit', [DashboardController::class, 'rumahsakit']);
