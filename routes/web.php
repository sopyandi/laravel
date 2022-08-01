<?php

use App\Models\Post;
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

Route::get('/', function () {
    return view('home',[
    "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about' ,[
    "title"=>"About",
    "name"=>"Rian Sopyandi",
    "gmail"=>"sopyandirian12@gmail.com",
    "img"=>"anwar.jpg"

    ]);
});



Route::get('/blog', function () {
    
    return view('blog', [
        "title"=>"Blog",
        "blog" => Post::all()
        
    ]);
});

// routs untuk single blog di halaman blog
Route::get('blog/{slug}', function($slug){

     return view('single',[
        "title" => "Single Blog",
        "single_blog" => Post::find($slug)
     ]);
});