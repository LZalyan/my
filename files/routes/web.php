<?php

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

Route::get('/main', [\App\Http\Controllers\HomeController::class,'index'])->name('main');

Route::get('/registration', [\App\Http\Controllers\RegistrationController::class,'index'])->name('registration');

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');

Route::get('/about', [\App\Http\Controllers\AboutController::class,'index'])->name('about');

Route::get('/book', [\App\Http\Controllers\BookController::class,'index'])->name('book');
