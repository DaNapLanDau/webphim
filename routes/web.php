<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
// admin controller
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;

Route::get('/user', [HomeController::class, 'index']);

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

Route::get('/', [IndexController::class, 'home']) ->name('homepage');
Route::get('/danh-muc/{slug}', [IndexController::class, 'category']) ->name('category');
Route::get('/the-loai/{slug}', [IndexController::class, 'genre']) ->name('genre');
Route::get('/phim/{slug}', [IndexController::class, 'movie']) ->name('movie');
Route::get('/xem-phim/{slug}', [IndexController::class, 'watch']) ->name('watch');
Route::get('/episode', [IndexController::class, 'episode']) ->name('episode');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// route admin
Route::resource('category', CategoryController::class);
Route::resource('genre', GenreController::class);
Route::resource('movie', MovieController::class);
Route::resource('episode', EpisodeController::class);
Route::get('select-movie', [EpisodeController::class,'select_movie'])->name('select-movie');
Route::get('update-topview-phim', [MovieController::class,'update_topview_phim']);
