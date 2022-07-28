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
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Rian Sopyandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam asperiores soluta
            voluptas eum commodi inventore reiciendis illum expedita, mollitia
            laboriosam fuga vel nesciunt corrupti! Aliquid tenetur debitis quidem ut delectus
            eos eius fuga fugiat architecto, amet corrupti ipsa minima saepe? Possimus corrupti aspernatur
             nihil sit tenetur debitis sint harum beatae asperiores qui dolor totam iure aut molestias 
             excepturi, repellendus quasi earum, accusamus in dolorum non. Odio, sint rem. Quas blanditiis
              consequuntur mollitia sed expedita itaque quam maiores quaerat quisquam delectus!"
        ],
        [
            "title" => "Judul Post Selanjutnya",
            "author" => "Rian Sopyandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam asperiores soluta
            voluptas eum commodi inventore reiciendis illum expedita, mollitia
            laboriosam fuga vel nesciunt corrupti! Aliquid tenetur debitis quidem ut delectus
            eos eius fuga fugiat architecto, amet corrupti ipsa minima saepe? Possimus corrupti aspernatur
             nihil sit tenetur debitis sint harum beatae asperiores qui dolor totam iure aut molestias 
             excepturi, repellendus quasi earum, accusamus in dolorum non. Odio, sint rem. Quas blanditiis
              consequuntur mollitia sed expedita itaque quam maiores quaerat quisquam delectus!"
        ]
        ];
        
    return view('blog', [
        "title"=>"Blog",
        "blog" => $blog_post
    ]);
});