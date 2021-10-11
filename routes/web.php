<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

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
Route::get('/create', [FoodController::class, 'create'])->name('foods.create');
Route::post('/create', [FoodController::class, 'store'])->name('foods.store');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('auth.formLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('auth.formRegister');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('callback/{provider}', [SocialController::class, 'callback']);

