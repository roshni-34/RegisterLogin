<?php

use App\Http\Controllers\RegisterController;
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
//     return view('welcome');
// });

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register-store', [RegisterController::class, 'registerStore'])->name('registerStore');
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/login-check', [RegisterController::class, 'loginCheck'])->name('loginCheck');
Route::get('/admin-dashboard', [RegisterController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/user-dashboard', [RegisterController::class, 'userDashboard'])->name('userDashboard');

