<?php

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/noticias/{item}', [PostController::class, 'noticias'])->name('noticias');

Route::get('/tags/{tag}',[PostController::class, 'tags'])->name('tags');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas del administrador de noticias

Route::resource('post', NoticiaController::class)->names('post');


    



