<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
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
Route::get('/aboutme', [AboutmeController::class, 'index'])->name('aboutme');

Route::resource('/proyectos', ProyectoController::class)->middleware('auth');

Route::resource('/posts', PostController::class)->middleware('auth');

Route::get('/', [BlogController::class, 'index'])->name('blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
