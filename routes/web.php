<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\RegisterController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('page.home');
Route::get('/foto', [FotoController::class, 'index'])->name('page.foto');
Route::get('/album', [AlbumController::class, 'index'])->name('page.album');
Route::get('/komentar', [KomentarController::class, 'index'])->name('page.komentar');
Route::get('/like', [LikeController::class, 'index'])->name('page.like');
Route::get('/save', [SaveController::class, 'index'])->name('page.save');
Route::get('/upload', [UploadController::class, 'index'])->name('page.upfoto.upload');
Route::get('/forgotpassword', [ForgotpasswordController::class, 'index'])->name('logen.forgotpassword');
Route::get('/register', [RegisterController::class, 'index'])->name('logen.register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
