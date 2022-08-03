<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'home']);
Route::get('/about', [PostController::class, 'about']);
Route::get('/blog', [PostController::class, 'blog']);

// routs untuk single blog di halaman blog
Route::get('blog/{slug}', [PostController::class, 'singgle']);