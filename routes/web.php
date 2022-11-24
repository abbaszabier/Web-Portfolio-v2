<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post("/logout", [LoginController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::prefix('/services')->group(function(){
    Route::get('/', [ServicesController::class, 'index']);
    Route::get('/{category:slug}', [ServicesController::class, 'show']);
});
Route::prefix('/portfolio')->group(function(){
    Route::get('/', [PostController::class, 'index']);
    // Route::post('/', [PostController::class, 'search']);
    Route::get('/{post:slug}', [PostController::class, 'show']);
});
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'createSlug'])->middleware('auth');
Route::Post('/dashboard/posts/uploadImage', [DashboardPostController::class, 'uploadImage'])->name('ckeditor.upload')->middleware('auth');

Route::prefix('/dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
    Route::resource('/posts', DashboardPostController::class)->middleware('auth');
});