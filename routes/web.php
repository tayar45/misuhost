<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('home');
})->name('home');

Route::get('/login', [UserController::class,'loginPage'])->name('loginPage');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::get('/signup', [UserController::class,'create'])->name('signup');
Route::post('/signup', [UserController::class,'store'])->name('store');
Route::get('/logout', [UserController::class,'logout'])->name('logout');


Route::get('auth/google', [SocialiteController::class,'redirectToGoogle']);
Route::get('auth/google/callback', [SocialiteController::class,'handleGoogleCallback']);


Route::get('/{id}', [UserController::class,'show'])->name('show')->middleware('auth');

Route::get('/{id}/settings', [UserController::class,'edit'])->name('edit')->middleware('auth');

Route::put('/{id}', [UserController::class,'update'])->name('update')->middleware('auth');
