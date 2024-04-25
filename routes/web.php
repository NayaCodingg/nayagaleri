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

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('page.home');
Route::get('/foto', [FotoController::class, 'index'])->middleware('auth')->name('page.foto');
Route::get('/albums', [AlbumController::class, 'index'])->middleware('auth')->name('page.album');
Route::get('/album/{id}', [AlbumController::class, 'detail'])->middleware('auth');
Route::get('/save', [SaveController::class, 'index'])->middleware('auth')->name('page.save');

// Upload
Route::get('/upload', [UploadController::class, 'upload'])->name('page.upfoto.upload');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

// Komentar
Route::post('/cmnt', [KomentarController::class, 'index'])->middleware('auth')->name('page.komentar');

// Login, Register, Forgot Password
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/upl_album',[UploadController::class,'upl_album']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

