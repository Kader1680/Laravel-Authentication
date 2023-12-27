<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('register');
// });
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/invalid', function () {
//     return view("invalid");
// });


// Route::get('/profil', function () {
//     return view("Profil");
// });
Route::get('/home', [App\Http\Controllers\Homecontroller::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\AuthController::class, 'RegisterPage'])->name("register");
Route::post('/', [App\Http\Controllers\AuthController::class, 'register'])->name("register");
Route::get('/login', [App\Http\Controllers\AuthController::class, 'LoginPage'])->name("login");
Route::post('/login', [App\Http\Controllers\AuthController::class, 'LoginM2'])->name("login");
Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'profilePage'])->name("profil");
// Route::post('/login', [App\Http\Controllers\AuthController::class, 'LoginM2']);
// Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
// Route::post('', [App\Http\Controllers\AuthController::class, 'login']);



