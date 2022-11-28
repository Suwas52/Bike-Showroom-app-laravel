<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'layout'])->name('layout');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
// Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/list', [UserController::class, 'list'])->name('list');
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/update', [UserController::class, 'update']);
Route::get('/delete/{id}', [UserController::class, 'delete']);